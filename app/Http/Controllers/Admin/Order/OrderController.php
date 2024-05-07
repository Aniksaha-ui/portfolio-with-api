<?php

namespace App\Http\Controllers\Admin\Order;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Auth;
class OrderController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function createOrder(){
        $category=DB::table('categories')->get();
        $brand = DB::table('brands')->get();
        $color = DB::table('codemas')->where('hardcode','color')->get();
        $size = DB::table('codemas')->where('hardcode','size')->get();
        $products = DB::table('products')->get();
        $user=DB::table('users')->get();
 
        return view("admin.order.createorder",compact('products','category','brand','user','color','size'));
   }


    public function storeOrder(Request $request){
        date_default_timezone_set("Asia/Dhaka");
        $id = Auth::guard('admin')->check();
        $newdate = date("y-m-d", strtotime($request->date));
 
        $month = date('F',strtotime($newdate));
        $year = date('Y',strtotime($newdate));
        // dd($year);
        // dd($request->all());
        $total = 0;
        $order = array();
        $orderDetails = array();
        $shipping= array();
        // dd(count($request->product_id));
        $order['user_id']=$request->ship_name;
        // dd(count($request->price));
       for($i=0;$i<count($request->total_amount);$i++){
               $total=$total+$request->total_amount[$i];
       }
       $order['paying_amount']= $total;
       $order['status'] = 0;
       $order['status_code']=mt_rand(100000,999999);
       $order['payment_type']=$request->payment_type;
 //       $order['date'] = date('y-m-d');
       $order['date'] = $newdate;
 //       $order['month']=date('F');
       $order['month']=$month;
       $order['year']=$year;
       $order['order_number']=$request->order_number;
 
       $orderId =DB::table('orders')->insertGetId($order);
 
       for($product_id=0 ;$product_id < count($request->product_id);$product_id++){
 
        // $total=$total+$request->total_amount[$i];
        $orderDetails['order_id'] = $orderId;
        $orderDetails['product_id']=$request->product_id[$product_id];
        $orderDetails['color']=$request->product_color[$product_id];
        $orderDetails['size']=$request->product_size[$product_id];
        $orderDetails['quantity']=$request->quantity[$product_id];
        $orderDetails['singleprice']=$request->price[$product_id];
        $orderDetails['totalprice']=$request->quantity[$product_id]*$request->price[$product_id];
        $order =DB::table('order_details')->insertGetId($orderDetails);
        }
 
        $customerName = DB::table('users')->where('id',$request->ship_name)->select('name')->first();
 
        $shipping['order_id'] = $orderId;
        $shipping['ship_name'] = $customerName->name;
        $shipping['ship_phone'] = $request->ship_phone;
        $shipping['ship_email']= $request->ship_email;
        $shipping['ship_address'] =$request->ship_address;
        $shipping['ship_city'] = $request->ship_city;
       
        DB::table('shipping')->insert($shipping);
 
        $notification=array(
               'massage'=>'Order Created Successfully',
               'alert-type'=>'success'
         );
        return Redirect()->route('admin.neworder')->with($notification); 
   }
}
