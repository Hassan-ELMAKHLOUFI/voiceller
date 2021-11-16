<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DataTables;

class UserNotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Auth::user()->notifications->where('type', 'App\Notifications\GeneralNotification')->all();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('actions', function($row){
                        $actionBtn = '<div class="dropdown">
                                            <button class="btn table-actions" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-ellipsis-v"></i>                       
                                            </button>
                                            <div class="dropdown-menu table-actions-dropdown" role="menu" aria-labelledby="actions">
                                                <a class="dropdown-item" href="'. route("user.notifications.show", $row["id"] ). '"><i class="fa fa-bell"></i> View</a>
                                                <a class="dropdown-item" data-toggle="modal" id="deleteNotificationButton" data-target="#deleteNotificationModal" href="" data-attr="'. route("user.notifications.delete", $row["id"] ). '"><i class="fa fa-bell-slash"></i> Delete</a>
                                            </div>
                                        </div>';
                        return $actionBtn;
                    })
                    ->addColumn('created-on', function($row){
                        $created_on = '<span>'.date_format($row["created_at"], 'Y-m-d H:i:s').'</span>';
                        return $created_on;
                    })
                    ->addColumn('read-on', function($row){
                        if (!is_null($row["read_at"])) {
                            $read_on = '<span>'.date_format($row["read_at"], 'Y-m-d H:i:s').'</span>';
                            return $read_on;
                        } else {
                            return '<span>'.$row["read_at"].'</span>';
                        }
                        
                    })
                    ->addColumn('message', function($row){
                        $message = '<span>'.$row["data"]["message"].'</span>';
                        return $message;
                    })
                    ->addColumn('subject', function($row){
                        $created_on = $row["data"]["subject"];
                        return $created_on;
                    })
                    ->addColumn('sender', function($row){
                        $sender = '<span>'.ucfirst($row["data"]["sender"]).'</span>';
                        return $sender;
                    })
                    ->addColumn('notification-type', function($row){                    
                        $notification = '<span class="cell-box notification-'.strtolower($row["data"]["type"]).'">'.$row["data"]["type"].'</span>';
                        return $notification;
                    })
                    ->addColumn('user-action', function($row){
                        $user_action = '<span>'.$row["data"]["action"].'</span>';
                        return $user_action;
                    })
                    ->rawColumns(['actions', 'created-on', 'message', 'subject', 'sender', 'notification-type', 'user-action', 'read-on'])
                    ->make(true);
                    
        }

        return view('user.notification.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $notification = auth()->user()->notifications()->find($id);

        if($notification) {
            $notification->markAsRead();
        }
        
        return view('user.notification.show', compact('notification'));   
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notification = auth()->user()->notifications()->find($id);

        if($notification) {
            $notification->delete();
        }
    
        return redirect()->route('user.notifications')->with('success', 'Notification was deleted successfully');    
        
    }

    public function delete($id)
    {   
        $notification = auth()->user()->notifications()->find($id);

        return view('user.notification.delete', compact('notification'));  
    }


    /**
     * Mark all notifications as read
     */
    public function markAllRead()
    {
        auth()->user()->unreadNotifications->markAsRead();

        return redirect()->route('user.notifications')->with('success', 'All notifications are marked as read');
    }


    /**
     * Delete all notifications
     */
    public function deleteAll()
    {
        auth()->user()->notifications()->delete();

        return redirect()->route('user.notifications')->with('success', 'All notifications are deleted');
    }


    /**
     * Mark a notification as read
     */
    public function markNotification(Request $request)
    {
        auth()->user()
            ->unreadNotifications
            ->when($request->input('id'), function ($query) use ($request) {
                return $query->where('id', $request->input('id'));
            })
            ->markAsRead();

        return response()->noContent();
    }
}
