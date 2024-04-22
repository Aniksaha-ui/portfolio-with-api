<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Image;

class ProductController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(){



    $product = DB::table('products')
    				->join('categories','products.category_id','categories.id')
    				->join('brands','products.brand_id','brands.id')
    				->select('products.*','categories.category_name','brands.brand_name')
    				->get();
    				// return response()->json($product);
                return view('admin.product.index',compact('product'));

    }
    

    public function create(){
 		$category = DB::table('categories')->get();
     	$brand = DB::table('brands')->get();
    	
    	return view('admin.product.create',compact('category','brand'));

    }


      public function GetSubcat($category_id){
   	$cat = DB::table('subcategories')->where('category_id',$category_id)->get();
   	return json_encode($cat);

   }

  public function GetLastLevel($category_id,$subcategory_id){
    // dd($subcategory_id);
    $cat = DB::table('lastlavels')->where('category_id',$category_id)->where('subcategory_id',$subcategory_id)->get();
    return json_encode($cat);
  }


    public function store(Request $request){
    // dd($request->all());
    $data = array();
    $data['product_name'] = $request->product_name;
    $data['product_code'] = $request->product_code;
    $data['category_id'] = $request->category_id;
    $data['subcategory_id'] = $request->subcategory_id;
    $data['brand_id'] = $request->brand_id;
    $data['selling_price']= $request->selling_price;
    // $data['product_color']= $request->product_color;
    // $data['product_size']= $request->product_size;
    $data['lastlavel_id']= $request->lastlavel;
    $data['product_details'] = $request->product_details;
    $data['status'] = 1;
    $image_one = $request->image_one;
    // $image_two = $request->image_two;
    // $image_three = $request->image_three;
  



    //return response()->json($data);

       if ($image_one) {
     $image_one_name = hexdec(uniqid()).'.'.$image_one->getClientOriginalExtension();
     Image::make($image_one)->save('image/product/'.$image_one_name);
     $data['image_one'] = 'image/product/'.$image_one_name;


     $images=array();
     if($files=$request->file('multiimage')){
         foreach($files as $file){
             $name=hexdec(uniqid()).'.'.$file->getClientOriginalExtension();
             $file->move('image/product',$name);
             $images[]=$name;
         }
     }
     /*Insert your data*/
 
    
      
         //you can put other insertion here

     $product = DB::table('products')->insertGetId($data);
     

      $imageList = array();
      // dd($images);
      foreach($images as $image){
        // print("image is $images");
        $imageList['product_img'] = 'image/product/'.$image;
        $imageList['product_id'] = $product ;
        $productImages = DB::table('product_images')->insert($imageList);
      }

      $notification=array(
        'massage'=>'Product Added successfully',
        'alert-type'=>'success'
       );
           return Redirect()->back()->with($notification);


		}

	}



	   public function inactive($id){
   	DB::table('products')->where('id',$id)->update(['status'=>0]);
  		$notification=array(
            'massage'=>'Product Inactive Successfully',
            'alert-type'=>'success'
     	 );
           return Redirect()->back()->with($notification);
   }


       public function active($id){
   	DB::table('products')->where('id',$id)->update(['status'=>1]);
   		$notification=array(
            'massage'=>'Product Active Successfully',
            'alert-type'=>'success'
     	 );
           return Redirect()->back()->with($notification);
   }


     public function DeleteProduct($id){
   
   $product = DB::table('products')->where('id',$id)->first();

   $image1 = $product->image_one;
 
   unlink($image1);
  
   DB::table('products')->where('id',$id)->delete();
 $notification=array(
            'massage'=>'Product Deleted Successfully',
            'alert-type'=>'success'
     	 );
           return Redirect()->back()->with($notification);
 
  }




   public function ViewProduct($id){

  	$product = DB::table('products')
    				->join('categories','products.category_id','categories.id')
    				->join('subcategories','products.subcategory_id','subcategories.id')
    				->join('brands','products.brand_id','brands.id')
    				->select('products.*','categories.category_name','brands.brand_name','subcategories.subcategory_name')
    				->where('products.id',$id)
    				->first();

                    return view('admin.product.show',compact('product'));
    				
    	 
  }




	  public function EditProduct($id){
	  	$product = DB::table('products')->where('id',$id)->first();
	  	return view('admin.product.edit',compact('product'));

	  }


 public function UpdateProductWithoutPhoto(Request $request,$id){
    
    $data = array();
    $data['product_name'] = $request->product_name;
    $data['product_code'] = $request->product_code;
    $data['category_id'] = $request->category_id;
    $data['subcategory_id'] = $request->subcategory_id;
    $data['brand_id'] = $request->brand_id;
    $data['product_details'] = $request->product_details;
   
    $update = DB::table('products')->where('id',$id)->update($data);
    if ($update) {
    	  $notification=array(
            'massage'=>'Product Updated successfully',
            'alert-type'=>'success'
      );
           return Redirect()->route('all.product')->with($notification);
    }else{
    	  $notification=array(
            'massage'=>'Nothing to Update',
            'alert-type'=>'success'
      );
           return Redirect()->route('all.product')->with($notification);

    }

 }



  public function UpdateProductPhoto(Request $request,$id){

  	$old_one = $request->old_one;
  	$old_two = $request->old_two;
  	$old_three = $request->old_three;

    $data = array();
 	
 	$image_one = $request->file('image_one');
 	$image_two = $request->file('image_two');
 	$image_three = $request->file('image_three');


 	if ($image_one) {
 		unlink($old_one);
 	  $image_name = date('dmy_H_s_i');
 	  $ext = strtolower($image_one->getClientOriginalExtension());
 	  $image_full_name = $image_name.'.'.$ext;
 	  $upload_path = 'image/product/';
 	  $image_url = $upload_path.$image_full_name;
 	  $success = $image_one->move($upload_path,$image_full_name);

 	  $data['image_one'] = $image_url;
 	  $productimg = DB::table('products')->where('id',$id)->update($data);
 	   $notification=array(
            'massage'=>'Product image one successfully',
            'alert-type'=>'success'
      );
           return Redirect()->route('all.product')->with($notification);
  }
  if ($image_two) {
 		unlink($old_two);
 	  $image_name = date('dmy_H_s_i');
 	  $ext = strtolower($image_two->getClientOriginalExtension());
 	  $image_full_name = $image_name.'.'.$ext;
 	  $upload_path = 'image/product/';
 	  $image_url = $upload_path.$image_full_name;
 	  $success = $image_two->move($upload_path,$image_full_name);

 	  $data['image_two'] = $image_url;
 	  $productimg = DB::table('products')->where('id',$id)->update($data);
 	   $notification=array(
            'massage'=>'Product image two update successfully',
            'alert-type'=>'success'
      );
           return Redirect()->route('all.product')->with($notification);

  }
  if ($image_three) {
 		unlink($old_three);
 	  $image_name = date('dmy_H_s_i');
 	  $ext = strtolower($image_three->getClientOriginalExtension());
 	  $image_full_name = $image_name.'.'.$ext;
 	  $upload_path = 'image/product/';
 	  $image_url = $upload_path.$image_full_name;
 	  $success = $image_three->move($upload_path,$image_full_name);

 	  $data['image_three'] = $image_url;
 	  $productimg = DB::table('products')->where('id',$id)->update($data);
 	    $notification=array(
            'massage'=>'Product image three update successfully',
            'alert-type'=>'success'
      );
           return Redirect()->route('all.product')->with($notification);
  }

}


}
