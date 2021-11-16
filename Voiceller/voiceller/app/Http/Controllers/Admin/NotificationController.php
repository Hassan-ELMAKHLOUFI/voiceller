<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\LicenseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Illuminate\Http\Request;
use App\Notifications\GeneralNotification;
use App\Models\User;
use DataTables;

class NotificationController extends Controller
{
    private $api;

    public function __construct()
    {
        $this->api = new LicenseController();
    }

    /**
     * Display all general notifications
     * 
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $verify = $this->api->verify_license();

        if($verify['status']!=false){
            die('Your license is invalid or not activated, please contact support.');
        }

        if ($request->ajax()) {
            $data = Auth::user()->notifications->where('type', 'App\Notifications\GeneralNotification')->all();;
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('actions', function($row){
                        $actionBtn = '<div class="dropdown">
                                            <button class="btn table-actions" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-ellipsis-v"></i>                       
                                            </button>
                                            <div class="dropdown-menu table-actions-dropdown" role="menu" aria-labelledby="actions">
                                            <a class="dropdown-item" href="'. route("admin.notifications.show", $row["id"] ). '"><i class="fa fa-bell"></i> View</a>
                                            <a class="dropdown-item" data-toggle="modal" id="deleteNotificationButton" data-target="#deleteNotificationModal" href="" data-attr="'. route("admin.notifications.delete", $row["id"] ). '"><i class="fa fa-bell-slash"></i> Delete</a>
                                            </div>
                                        </div>';
                        return $actionBtn;
                    })
                    ->addColumn('created-on', function($row){
                        $created_on = '<span>'.date_format($row["created_at"], 'Y-m-d H:i:s').'</span>';
                        return $created_on;
                    })
                    ->addColumn('subject', function($row){
                        $created_on = $row["data"]["subject"];
                        return $created_on;
                    })
                    ->addColumn('user-action', function($row){
                        $user_action = '<span>'.$row["data"]["type"].'</span>';
                        return $user_action;
                    })
                    ->addColumn('notification-type', function($row){
                        $notification = '<span class="cell-box notification-'.strtolower($row["data"]["type"]).'">'.$row["data"]["type"].'</span>';
                        return $notification;
                    })
                    ->rawColumns(['actions', 'notification-type', 'created-on', 'subject', 'user-action'])
                    ->make(true);
                    
        }

        return view('admin.notification.index');
    }


    /**
     * Display all system notifications
     */
    public function system(Request $request)
    {
        if ($request->ajax()) {
            $data = Auth::user()->notifications->where('type', '<>', 'App\Notifications\GeneralNotification')->all();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('actions', function($row){
                        $actionBtn = '<div class="dropdown">
                                            <button class="btn table-actions" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-ellipsis-v"></i>                       
                                            </button>
                                            <div class="dropdown-menu table-actions-dropdown" role="menu" aria-labelledby="actions">
                                            <a class="dropdown-item" href="'. route("admin.notifications.systemShow", $row["id"] ). '"><i class="fa fa-bell"></i> View</a>
                                            <a class="dropdown-item" data-toggle="modal" id="deleteNotificationButton" data-target="#deleteNotificationModal" href="" data-attr="'. route("admin.notifications.systemDelete", $row["id"] ). '"><i class="fa fa-bell-slash"></i> Delete</a>
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
                    ->addColumn('subject', function($row){
                        $created_on = '<span>'.$row["data"]["subject"].'</span>';
                        return $created_on;
                    })  
                    ->addColumn('email', function($row){
                        $email = '<span>'.$row["data"]["email"].'</span>';
                        return $email;
                    })  
                    ->addColumn('country', function($row){
                        $country = '<span>'.$row["data"]["country"].'</span>';
                        return $country;
                    })                   
                    ->addColumn('notification-type', function($row){
                        if ($row["data"]["type"] == "new-user") {
                            $type = "New User";
                        } elseif($row["data"]["type"] == "new-payment") {
                            $type = "New Payment";
                        } elseif($row["data"]["type"] == "payout-request") {
                            $type = "New Payout Request";
                        }
                        $notification = '<span class="cell-box notification-'.strtolower($row["data"]["type"]).'">'.$type.'</span>';
                        return $notification;
                    })
                    ->rawColumns(['actions', 'notification-type', 'created-on', 'subject', 'read-on', 'email', 'country'])
                    ->make(true);
                    
        }

        return view('admin.notification.system');

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.notification.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
         $verify = $this->api->verify_license();

        if($verify['status']!=false){
            die('Your license is invalid or not activated, please contact support.');
        }

        request()->validate([
            'notification-type' => 'required|string',
            'notification-action' => 'required|string',
            'notification-subject' => 'required|string',
            'notification-message' => 'required|string',
        ]);

        $notification = [
            'type' => request('notification-type'),
            'action' => request('notification-action'),
            'subject' => request('notification-subject'),
            'message' => request('notification-message'),
        ];
            
        $users = User::all();

        Notification::send($users, new GeneralNotification($notification));  

        return redirect()->route('admin.notifications')->with("success", "New notification has been created successfully");
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
        
        return view('admin.notification.show', compact('notification'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function systemShow($id)
    {
        $notification = auth()->user()->notifications()->find($id);

        if($notification) {
            $notification->markAsRead();
        }
        
        return view('admin.notification.systemShow', compact('notification'));
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
    
        return redirect()->route('admin.notifications')->with('success', 'Notification was deleted successfully');          
    }


    public function delete($id)
    {   
        $notification = auth()->user()->notifications()->find($id);

        return view('admin.notification.delete', compact('notification'));  
    }


    /**
     * Delete system notifications
     */
    public function systemDestroy($id)
    {
        $notification = auth()->user()->notifications()->find($id);

        if($notification) {
            $notification->delete();
        }
    
        return redirect()->route('admin.notifications.system')->with('success', 'System notification was deleted successfully');          
    }


    public function systemDelete($id)
    {   
        $notification = auth()->user()->notifications()->find($id);

        return view('admin.notification.systemDelete', compact('notification'));  
    }

    
    /**
     * Mark all notifications as read
     */
    public function markAllRead()
    {
        $notifications = auth()->user()->unreadNotifications->where('type', '<>', 'App\Notifications\GeneralNotification');

        foreach($notifications as $notification) {
            $notification->markAsRead();
        }        

        return redirect()->route('admin.notifications.system')->with('success', 'All system notifications are marked as read');
    }


    /**
     * Delete all notifications
     */
    public function deleteAll()
    {
        $notifications = auth()->user()->notifications->where('type', '<>', 'App\Notifications\GeneralNotification');
        
        foreach($notifications as $notification) {
            $notification->delete();
        }          

        return redirect()->route('admin.notifications.system')->with('success', 'All system notifications are deleted');
    }
}
