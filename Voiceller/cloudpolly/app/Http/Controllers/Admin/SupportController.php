<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\LicenseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Support;
use App\Models\User;
use App\Mailers\AppMailer;
use Carbon\Carbon;
use DataTables;


class SupportController extends Controller
{
    private $api;

    public function __construct()
    {
        $this->api = new LicenseController();
    }

    /**
     * Display all support cases
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Support::all()->sortByDesc("created_at");
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('actions', function($row){
                        $actionBtn = '<div class="dropdown">
                                            <button class="btn table-actions" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-ellipsis-v"></i>                       
                                            </button>
                                            <div class="dropdown-menu table-actions-dropdown" role="menu" aria-labelledby="actions">
                                                <a class="dropdown-item" href="'. route("admin.support.show", $row["ticket_id"] ). '"><i class="fa fa-support"></i> View</a>
                                                <a class="dropdown-item" data-toggle="modal" id="deleteTicketButton" data-target="#deleteModal" href="" data-attr="'. route("admin.support.delete", $row["id"] ). '"><i class="fa fa-trash"></i> Delete</a>
                                            </div>
                                        </div>';
                        return $actionBtn;
                    })
                    ->addColumn('created-on', function($row){
                        $created_on = '<span>'.date_format($row["created_at"], 'Y-m-d H:i:s').'</span>';
                        return $created_on;
                    })
                    ->addColumn('custom-status', function($row){
                        $custom_status = '<span class="cell-box support-'.strtolower($row["status"]).'">'.$row["status"].'</span>';
                        return $custom_status;
                    })
                    ->addColumn('custom-priority', function($row){
                        $custom_priority = '<span class="cell-box priority-'.strtolower($row["priority"]).'">'.$row["priority"].'</span>';
                        return $custom_priority;
                    })
                    ->addColumn('username', function($row){
                        $username = '<span>'.User::find($row["user_id"])->name.'</span>';
                        return $username;
                    })
                    ->rawColumns(['actions', 'custom-status', 'created-on', 'custom-priority', 'username'])
                    ->make(true);
                    
        }

        return view('admin.support.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($ticket_id)
    {   
        $ticket = Support::where('ticket_id', $ticket_id)->firstOrFail();
        
        $created_by = User::find($ticket->user_id)->name;

        return view('admin.support.show', compact('ticket', 'created_by'));     

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AppMailer $mailer, $ticket_id)
    {
         $verify = $this->api->verify_license();

        if($verify['status']!=false){
            die('Your license is invalid or not activated, please contact support.');
        }

        request()->validate([
            'response-status' => 'required',
            'response' => 'required'
        ]);
        
        if (request('response-status') !== 'Pending' || request('response-status') !== 'Escalated') {
            $resolved_on = Carbon::now();
            $resolved_by = Auth::user()->name;
            $notify = true;
        } else {
            $resolved_on = '';
            $resolved_by = '';
            $notify = false;
        }

        $response = Support::where('ticket_id', $ticket_id)->firstOrFail();

        $response->status = request('response-status');
        $response->response = request('response');
        $response->resolved_on = $resolved_on;
        $response->resolved_by = $resolved_by;

        $response->save();

        if ($notify) {
            $user = User::find($response->user_id);
            $mailer->sendSupportTicketStatusNotification($user, $response);
        }        

        return redirect()->route('admin.support')->with("success", "Support ticket response has been saved");
    }

    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ticket = Support::where('id', $id)->firstOrFail();  

        $ticket->delete();

        return redirect()->route('admin.support')->with('success', 'Support ticket was deleted successfully');       
    }

    public function delete($id)
    {   
        $ticket = Support::where('id', $id)->firstOrFail();

        return view('admin.support.delete', compact('ticket'));     
    }
}
