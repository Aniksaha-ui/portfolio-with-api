<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\category;
use DB;
use Illuminate\support\Str;
use Image;


class CategoryController extends Controller
{
       public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function category(){

    		$category = category::all();

    		return view('admin.category.category',compact('category'));

    }

    public function storecategory(Request $request){
    	$validateData = $request->validate([
    		'category_name' => 'required|unique:categories|max:255'
    	]);

    	$data=array();
    	$data['category_name']=$request->category_name;
    	$image=$request->file('c_logo');
          if($request->hasFile('c_logo')){
            $get_image = $request->file('c_logo');
            $image = time().Str::random(10).'.'.$get_image->getClientOriginalExtension();
            Image::make($get_image)->save('image/category/'.$image);
              }
      // dd($image);
              if($image){
                  $data['img']='image/category/'.$image;
                 $brand=DB::table('categories')->insert($data);
       
       
             $notification=array(
                   'massage'=>'Brand add successfully',
                   'alert-type'=>'success'
             );
       
             return Redirect()->back()->with($notification);
       
       
               }
               else{
       
                  DB::table('categories')->insert($data);


                  $notification=array(
                        'massage'=>'Category add successfully',
                        'alert-type'=>'success'
                  );

                  return Redirect()->back()->with($notification);
                  
                        }
    
                  }



    public function Deletecategory($id){

    	DB::table('categories')->where('id',$id)->delete();


      $notification=array(
            'massage'=>'Category Deleted successfully',
            'alert-type'=>'success'
      );

      return Redirect()->back()->with($notification);

    }



    public function Editcategory($id){
    	$category=DB::table('categories')->where('id',$id)->first();
    	return view('admin.category.edit',compact('category'));
    }


    public function Updatecategory(Request $request,$id){
          // dd($id);
    $oldlogo = $request->old_logo;
    $data = array();
    $data['category_name'] = $request->category_name;
    
    // $image = $request->file('brand_logo');
    $right_image= $request->file('c_logo');

    
    if ($right_image) {
      if($oldlogo){
        unlink($oldlogo);

      }

        // --previous system 
        // $image_name = date('dmy_H_s_i');
        // $ext = strtolower($image->getClientOriginalExtension());
        // $image_full_name = $image_name.'.'.$ext;
        // $upload_path = 'image/product';
        // $image_url = $upload_path.$image_full_name;
        // $success = $image->move($upload_path,$image_full_name);
        // $data['img'] = $image_url;
        // $right_image= $request->file('brand_logo');
        
        $image_name = hexdec(uniqid()).'.'.$right_image->getClientOriginalExtension();
        Image::make($right_image)->save('image/category/'.$image_name);
        $data['img'] = 'image/category/'.$image_name;
        $Category = DB::table('categories')->where('id',$id)->update($data);
        $notification=array(
            'massage'=>'Category Updated successfully',
            'alert-type'=>'success'
      );
    } else{
        // dd($data);

        $Category = DB::table('categories')->where('id',$id)->update($data);
        $notification=array(
            'massage'=>'Category Updated successfully',
            'alert-type'=>'success'
      );
    }
    
  
    return Redirect()->route('category')->with($notification);

      
    }




}
