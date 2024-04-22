<?php

namespace App\Http\Controllers\Admin;

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

   public function NewOrder(){
    
       $order = DB::table('orders')
                     ->join('users','orders.user_id','users.id')
                     ->select('orders.*','users.name','users.phone')
                     ->get();
       return view('admin.order.pending',compact('order'));
    }

        public function ViewOrder($id){

             

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


     	return view('admin.order.view_order',compact('order','shipping','details','numberOfProduct','totalPrice'));		

    }

    public function EditOrder($id){

       $order = DB::table('orders')->where('id',$id)->first();
       return view('admin.order.editorder',compact('order'));

    }

    public function UpdateOrder(Request $request,$id){

       // dd($id);
       $data=array();
       $data['status'] = $request->status;
       $update = DB::table('orders')->where('id',$id)->update($data);

       if ($update) {

              $notification=array(
        'massage'=>'Order Status Updated successfully',
        'alert-type'=>'success'
        );
              return Redirect()->route('admin.neworder')->with($notification);
   
       }


       else{

      $notification=array(
        'massage'=>'Nothing to Update',
        'alert-type'=>'success'
       );
       
              return Redirect()->route('category')->with($notification);	
       }
    }


        public function PaymentAccept($id){
    DB::table('orders')->where('id',$id)->update(['status'=>1]);
     $notification=array(
            'massage'=>'Order Accept Done',
            'alert-type'=>'success'
      );
           return Redirect()->route('admin.neworder')->with($notification); 
    } 


      public function PaymentCancel($id){
    DB::table('orders')->where('id',$id)->update(['status'=>4]);
     $notification=array(
            'massage'=>'Order Cancle',
            'alert-type'=>'success'
      );
           return Redirect()->route('admin.neworder')->with($notification); 
  }



          public function DeliveryProcess($id){
    DB::table('orders')->where('id',$id)->update(['status'=>2]);
     $notification=array(
            'massage'=>'Delivery Process Done Successfully',
            'alert-type'=>'success'
      );
           return Redirect()->route('admin.neworder')->with($notification); 
    } 


           public function DeliveryDone($id){
    DB::table('orders')->where('id',$id)->update(['status'=>3]);
     $notification=array(
            'massage'=>'Delivered Successfully',
            'alert-type'=>'success'
      );
           return Redirect()->route('admin.neworder')->with($notification); 
    }

    


    public function AcceptPayment(){
  $order = DB::table('orders')->where('status',1)->get();
  return view('admin.order.pending',compact('order')); 
  }


  public function CancelOrder(){
  $order = DB::table('orders')->where('status',4)->get();
  // dd($order);
  return view('admin.order.pending',compact('order')); 
  }


    public function ProcessPayment(){
  $order = DB::table('orders')->where('status',2)->get();
  // dd($order);
  return view('admin.order.pending',compact('order')); 
  }


   public function SuccessPayment(){
  $order = DB::table('orders')->where('status',3)->get();
  // dd($order);
  return view('admin.order.pending',compact('order')); 
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
       $newdate = date("y-m-d", strtotime($request->date));

       $month = date('F',strtotime($newdate));
       $year = date('Y',strtotime($newdate));
      
       $total = 0;
       $order = array();
       $orderDetails = array();
       $shipping= array();
       
       $order['user_id']=$request->ship_name;
      
      for($i=0;$i<count($request->total_amount);$i++){
              $total=$total+$request->total_amount[$i];
      }
      $order['paying_amount']= $total;
      $order['status'] = 0;
      $order['status_code']=mt_rand(100000,999999);
      $order['payment_type']=$request->payment_type;

      $order['date'] = $newdate;

      $order['month']=$month;
      $order['year']=$year;
      $order['order_number']=$request->order_number;

      $orderId =DB::table('orders')->insertGetId($order);

      for($product_id=0 ;$product_id < count($request->product_id);$product_id++){
       $product_name = DB::table('products')->where('id',$request->product_id[$product_id])->select('product_name')->first();
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


//   public function orderBetweenDate(Request $request){

//                $startDate = date("Y-m-d", strtotime("01-12-2015"));
//        $endDate   = date("Y-m-d", strtotime("28-02-2023"));

//        // $query = DB::table('orders')->whereBetween("str_to_date(date, '%d-%m-%Y')", array($startDate, $endDate))->get();
//        $query = DB::table('orders')->where('date','>',$startDate)->where('date','<',$endDate)->get();

//        dd($query);

//   }


}
