<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\LicenseController;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Referral;
use App\Models\Payout;
use App\Models\Payment;
use App\Models\User;
use DataTables;
use DB;

class ReferralSystemController extends Controller
{
    private $api;

    public function __construct()
    {
        $this->api = new LicenseController();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Referral::whereNotNull('order_id')->latest()->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('actions', function($row){
                        $actionBtn = '<div class="dropdown">
                                            <button class="btn table-actions" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-ellipsis-v"></i>                       
                                            </button>
                                            <div class="dropdown-menu table-actions-dropdown" role="menu" aria-labelledby="actions">
                                                <a class="dropdown-item" href="'. route("admin.referral.show", $row["order_id"] ). '"><i class="fa fa-file-text"></i> View</a>                                              
                                            </div>
                                        </div>';
                        return $actionBtn;
                    })
                    ->addColumn('created-on', function($row){
                        $created_on = '<span>'.date_format($row["created_at"], 'Y-m-d H:i:s').'</span>';
                        return $created_on;
                    })
                    ->addColumn('custom-payment', function($row){
                        $custom_group = config('payment.default_system_currency_symbol') . $row["payment"];
                        return $custom_group;
                    })
                    ->addColumn('custom-commission', function($row){
                        $custom_group = config('payment.default_system_currency_symbol') . $row["commission"];
                        return $custom_group;
                    })
                    ->rawColumns(['actions', 'created-on', 'custom-payment', 'custom-commission'])
                    ->make(true);
                    
        }

        $total_users = Referral::select(DB::raw("count(DISTINCT referred_id) as data"))->get();
        $total_income = Referral::select(DB::raw("sum(payment) as data"))->get();
        $total_commission = Referral::select(DB::raw("sum(commission) as data"))->get();
        $total_credits = Referral::select(DB::raw("sum(credits) as data"))->get();

        $referral_information = ['referral_headline', 'referral_guideline'];
        $referral = [];
        $settings = Setting::all();

        foreach ($settings as $row) {
            if (in_array($row['name'], $referral_information)) {
                $referral[$row['name']] = $row['value'];
            }
        }

        return view('admin.finance-management.referrals.index', compact('referral', 'total_users', 'total_income', 'total_commission', 'total_credits'));
    }


    public function topReferrers(Request $request)
    {
        if ($request->ajax()) {
            DB::statement("SET SQL_MODE=''");
            $data = DB::table('referrals')
                ->select('referrals.*', 'users.id', 'users.name', 'users.email', 'users.referral_id', 'users.group', 'users.created_at', DB::raw('sum(referrals.credits) as total_credits'), DB::raw('sum(referrals.commission) as total_commission'), DB::raw('count(DISTINCT referrals.referred_id) as total_referred'))
                ->join('users', 'users.id', '=', 'referrals.referrer_id')              
                ->groupBy('referrals.referrer_id')            
                ->get()->toArray();        
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('custom-group', function($row){
                        $custom_group = '<span class="cell-box user-group-'.$row->group.'">'.ucfirst($row->group).'</span>';
                        return $custom_group;
                    })
                    ->addColumn('custom_total_commission', function($row){
                        $total = ($row->total_commission) ? $row->total_commission : 0;
                        $custom_group = config('payment.default_system_currency_symbol') . $total;
                        return $custom_group;
                    })
                    ->rawColumns(['custom-group', 'custom_total_commission'])
                    ->make(true);
                    
        }


        return view('admin.finance-management.referrals.top.index');
    }


    public function registrationReferrals(Request $request)
    {
        if ($request->ajax()) {
            $data = Referral::select('referrals.*', 'users.id', 'users.name', 'users.email', 'users.group', 'users.status', 'users.country')->join('users', 'users.id', '=', 'referrals.referred_id')->whereNull('order_id')->orderBy('referrals.created_at', 'DESC')->get(); 
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('created-on', function($row){
                        $created_on = '<span>'.date_format($row["created_at"], 'Y-m-d H:i:s').'</span>';
                        return $created_on;
                    })
                    ->addColumn('custom-status', function($row){
                        $custom_status = '<span class="cell-box user-'.$row["status"].'">'.ucfirst($row["status"]).'</span>';
                        return $custom_status;
                    })
                    ->addColumn('custom-group', function($row){
                        $custom_group = '<span class="cell-box user-group-'.$row["group"].'">'.ucfirst($row["group"]).'</span>';
                        return $custom_group;
                    })                    
                    ->rawColumns(['created-on', 'custom-status', 'custom-group'])
                    ->make(true);
                    
        }


        return view('admin.finance-management.referrals.registration.index');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $verify = $this->api->verify_license();

        if($verify['status']!=false){
            die('Your license is invalid or not activated, please contact support.');
        }

        request()->validate([
            'enable-registration' => 'sometimes|required',
            'credits' => 'required_if:enable-registration,on',

            'enable-payment' => 'sometimes|required',
            'policy' => 'required_if:enable-payment,on',
            'commission' => 'required_if:enable-payment,on',
            'threshold' => 'required_if:enable-payment,on',

            'referral_guideline' => 'required',
            'referral_headline' => 'required',
        ]);

        $this->storeConfiguration('REFERRAL_SYSTEM_ENABLE', request('enable-referral'));
        $this->storeConfiguration('REFERRAL_USER_PAYMENT', request('enable-payment'));
        $this->storeConfiguration('REFERRAL_USER_PAYMENT_POLICY', request('policy'));
        $this->storeConfiguration('REFERRAL_USER_PAYMENT_COMMISSION', request('commission'));
        $this->storeConfiguration('REFERRAL_USER_PAYMENT_THRESHOLD', request('threshold'));
        $this->storeConfiguration('REFERRAL_USER_REGISTRATION', request('enable-registration'));
        $this->storeConfiguration('REFERRAL_USER_REGISTRATION_CREDITS', request('credits'));

        $rows = ['referral_headline', 'referral_guideline'];
        
        foreach ($rows as $row) {
            Setting::where('name', $row)->update(['value' => $request->input($row)]);
        }

        return redirect()->back()->with('success', 'Referral settings were successfully updated');
    }


    /**
     * Show referral payout requets.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function payouts(Request $request)
    {
        if ($request->ajax()) {
            $data = Payout::select('payouts.*', 'users.email', 'users.referral_paypal', 'users.referral_bank_requisites')->join('users', 'users.id', '=', 'payouts.user_id')->orderBy('payouts.created_at', 'DESC')->get(); 
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('actions', function($row){
                        $actionBtn = '<div class="dropdown">
                                            <button class="btn table-actions" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-ellipsis-v"></i>                       
                                            </button>
                                            <div class="dropdown-menu table-actions-dropdown" role="menu" aria-labelledby="actions">
                                                <a class="dropdown-item" href="'. route("admin.referral.payouts.show", $row["id"] ). '"><i class="fa fa-file-text"></i> View</a>                                              
                                                <a class="dropdown-item" data-toggle="modal" id="deletePayoutRequestButton" data-target="#deletePayoutRequestModal" href="" data-attr="'. route("admin.referral.payouts.cancel", $row["id"] ). '"><i class="fa fa-close"></i> Decline</a>                                              
                                            </div>
                                        </div>';
                        return $actionBtn;
                    })
                    ->addColumn('custom-status', function($row){
                        $custom_status = '<span class="cell-box payout-'.$row["status"].'">'.ucfirst($row["status"]).'</span>';
                        return $custom_status;
                    })
                    ->addColumn('created-on', function($row){
                        $created_on = '<span>'.date_format($row["created_at"], 'Y-m-d H:i:s').'</span>';
                        return $created_on;
                    })            
                    ->addColumn('custom-total', function($row){
                        $custom_group = config('payment.default_system_currency_symbol') . $row["total"];
                        return $custom_group;
                    })       
                    ->rawColumns(['created-on', 'actions', 'custom-status', 'custom-total'])
                    ->make(true);
                    
        }

        return view('admin.finance-management.referrals.payouts.index');
    }


    /**
     * Update user payout request status.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function paymentShow($order_id)
    {
        $id = Payment::where('order_id', $order_id)->firstOrFail();

        $user = User::where('id', $id->user_id)->firstOrFail();

        return view('admin.finance-management.referrals.show', compact('id', 'user'));
    }


    /**
     * Update user payout request status.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function payoutsShow(Request $request, Payout $id)
    {
        $user = User::where('id', $id->user_id)->firstOrFail();

        return view('admin.finance-management.referrals.payouts.show', compact('id', 'user'));
    }


    /**
     * Update user payout request status.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function payoutsUpdate(Request $request, Payout $id)
    {
        $verify = $this->api->verify_license();

        if($verify['status']!=false){
            die('Your license is invalid or not activated, please contact support.');
        }
        
        request()->validate([
            'status' => 'required',
        ]);

        Payout::where('id', $id->id)->update(['status' => $request->status]);     

        return redirect()->route('admin.referral.payouts')->with('success', 'Payout request has been successfully updated');
    }


    /**
     * Show decline confirmation 
     *
     * @return \Illuminate\Http\Response
     */
    public function payoutsCancel(Payout $id)
    {
        return view('admin.finance-management.referrals.payouts.delete', compact('id'));
    }


    /**
     * Decline payout request.
     *
     * @return \Illuminate\Http\Response
     */
    public function payoutsDecline(Payout $id)
    {
        Payout::where('id', $id->id)->update(['status' => 'declined']);

        $user = User::where('id', $id->user_id)->firstOrFail();   
        $user->balance = ($user->balance + $id->total);
        $user->save();

        return redirect()->back()->with('success', 'Selected payout request has been declined successfully.');
    }


    /**
     * Record in .env file
     */
    private function storeConfiguration($key, $value)
    {
        $path = base_path('.env');

        if (file_exists($path)) {

            file_put_contents($path, str_replace(
                $key . '=' . env($key), $key . '=' . $value, file_get_contents($path)
            ));

        }
    }


}
