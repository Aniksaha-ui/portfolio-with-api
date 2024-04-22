<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ReportController extends Controller
{
         public function __construct()
    {
        $this->middleware('auth:admin');
    }


   public function TodayOrder(){
	  date_default_timezone_set("Asia/Dhaka");
	  $today = date('Y-m-d');
	//   dd($today);
	  $total = DB::table('orders')->where('date',$today)->sum('total');
	  $order = DB::table('orders')
			 ->join('users','orders.user_id','users.id')	
			 ->where('date',$today)
			 ->select('users.name','users.phone','orders.*')
			 ->get();
	  return view('admin.report.today_order',compact('order','total'));
 }


   public function TodayDelivery(){
  $today = date('Y-m-d');
  
  $order = DB::table('orders')->where('date',$today)->get();
  return view('admin.report.today_delivery',compact('order'));
  }


   public function ThisMonth(){
  $month = date('F');
  $year = date('Y');
  $total = DB::table('orders')->where('month',$month)->where('year',$year)->sum('total');
  $order = DB::table('orders')
  ->join('users','orders.user_id','users.id')	
  ->where('month',$month)
  ->where('year',$year)
  ->select('users.name','users.phone','orders.*')
  ->get();
//   $order = DB::table('orders')->where('month',$month)->where('year',$year)->get();
  return view('admin.report.this_month',compact('order','total'));
 }


  public function Search(){

 	return view('admin.report.search');
 }


  public function searchbetweendate(){

 	return view('admin.report.daterangebetweenorder');
 }



 public function SearchByYear(Request $request){

 	$year = $request->year;

 	$total = DB::table('orders')->where('year',$year)->sum('total');
    
 	$order = DB::table('orders')
	         ->join('users','orders.user_id','users.id')
		     ->where('year',$year)->get();
 	return view('admin.report.search_year',compact('order','total')); 


 }


  public function SearchByMonth(Request $request){

	
 	$month = $request->month;
 	$total = DB::table('orders')->where('month',$month)->sum('total');
    
 	$order = DB::table('orders')
	        ->join('users','orders.user_id','users.id')	
			->where('month',$month)->get();
 	return view('admin.report.search_by_month',compact('order','total')); 


 }

  public function SearchByDate(Request $request){
	// dd($request->all());
 	$startdate = date("d-m-Y",strtotime($request->date));
	$enddate = $request->enddate ? date("d-m-Y",strtotime($request->enddate)) : '';
	// dd($enddate);
	$newdate = date("Y-m-d", strtotime($startdate));
	$newdate2 =  $request->enddate ? date("Y-m-d", strtotime($enddate)) : '';


	if($startdate!=null && $enddate!=null){		
		$total = DB::table('orders')->whereBetween('date',[$newdate,$newdate2])->sum('paying_amount');
		$order = DB::table('orders')
			   ->join('users','orders.user_id','users.id')
			   ->whereBetween('date',[$newdate,$newdate2])
			   ->select('users.name','users.phone','orders.*')
			   ->get();	

		// dd($order);
		  	
		// ordercontroller->orderBetweenDate
	}else{
		$total = DB::table('orders')->where('date',$newdate)->sum('paying_amount');
		$order = DB::table('orders')
			   ->join('users','orders.user_id','users.id')
			   ->where('date',$newdate)
			   ->select('users.name','users.phone','orders.*')
			   ->get();
	}
 	
 	return view('admin.report.search_by_date',compact('order','total','newdate','newdate2')); 

 }


}
