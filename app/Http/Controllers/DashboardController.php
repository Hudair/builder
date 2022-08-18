<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;
use App\Invoice;
use App\Project;
use DB;
use Auth;

class DashboardController extends Controller
{
	
	public function __construct()
    {	
		$this->middleware(function ($request, $next) {
			if(isset($_GET['language'])){
				session(['language' => $_GET['language']]);
				return back();
			}
			return $next($request);
		});
		date_default_timezone_set(get_company_option('timezone',get_option('timezone','Asia/Dhaka')));	
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$type = Auth::user()->user_type;

		$data = array();

		if( $type  == 'admin' ){
			$data['total_user'] = \App\User::where('user_type','user')
										   ->count();

			$data['paid_user'] = \App\Company::where('membership_type','member')
										     ->count();

			$data['trial_user'] = \App\Company::where('membership_type','trial')
										      ->count();						     

			$data['total_payment'] = \App\PaymentHistory::selectRaw('SUM(amount) as total')
						                                ->where('status','paid')
													    ->first()->total;

			$data['news_users'] = \App\User::where("user_type","user")
										   ->orderBy("id","desc")
			                               ->limit(5)->get();
			
			$data['recent_payment'] = \App\PaymentHistory::where('status','paid')
										                 ->limit(5)
														 ->orderBy('id','desc')
														 ->get();														 
		
		}else if( $type  == 'user' ){	
			$company_id = company_id();
			
			$data['current_month_income'] = current_month_income();
			$data['current_month_expense'] = current_month_expense();
            $project_status = \App\Project::where('company_id',$company_id)
                                          ->selectRaw('status, COUNT(id) as c')
                                          ->groupBy('status')
                                          ->get();

            foreach($project_status as $status){
            	$data['project_status'][$status->status] = $status->c;
            } 

			$company_id = company_id();
			$user_type = Auth::user()->user_type;

			$data['projects'] = Project::select('projects.*')
								->where('user_id',Auth::id())
								->orWhere('company_id',$company_id)
									->orderBy("projects.id","desc")->get();
               
		}

		$data['page']	=	array(
			'title'	=>	_lang('Dashboard'),
		);
		return view('backend/dashboard-'.$type,$data);
    }
	
}
