<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $id = Auth::id();
        $orders = DB::table('orders')->where('user_id',$id)->orderBy('id','DESC')->get();
        // dd($orders);
        return view('home',compact('orders'));
    }

    public function logout(){
        Auth::logout();

      $notification=array(
            'massage'=>'Successfully logout',
            'alert-type'=>'success'
      );

      return redirect()->route('login')->with($notification);
    }

    public function viewinvoice($id){
        $userId = Auth::id();
        $order = DB::table('orders')
    		->join('users','orders.user_id','users.id') 	
    		->select('orders.*','users.name','users.phone','users.present_address')
    		->where('orders.id',$id)
    		->first();
    		// dd($order);

     $shipping = DB::table('shipping')->where('order_id',$id)->first();
     // dd($shipping);

     $details = DB::table('order_details')
     			->join('products','order_details.product_id','products.id')
     			->select('order_details.order_id','order_details.color','order_details.size','order_details.quantity','order_details.singleprice','order_details.totalprice','products.product_code','products.image_one','products.product_name')
     			->where('order_details.order_id',$id)
     			->get();
     			// dd($details);

     $numberOfProduct = DB::table('order_details')->where('order_id',$id)->sum('quantity');
       
     $subTotal = DB::table('order_details')->where('order_id',$id)->sum('totalprice');
      $totalPrice = $subTotal;
       
//      dd(gettype($totalPrice));
//      dd($numberOfProduct);


     	// return view('admin.order.view_order',compact('order','shipping','details','numberOfProduct','totalPrice'));		
     	return view('Website.customer.invoice',compact('order','shipping','details','numberOfProduct','totalPrice'));		


    }

}
