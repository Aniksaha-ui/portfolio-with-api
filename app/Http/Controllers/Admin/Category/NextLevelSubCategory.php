<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class NextLevelSubCategory extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function index(){

        // $category = category::all();
        $category = DB::table('categories')->get();
        $nextsubcategory = DB::table('lastlavels')
                           ->join('categories','lastlavels.category_id','categories.id')
                           ->join('subcategories','lastlavels.subcategory_id','subcategories.id')
                           ->select('lastlavels.*','categories.category_name','subcategories.subcategory_name')
                           ->get();

    // dd($nextsubcategory);
        // dd($nextsubcategory);
    return view('admin.category.nextsubcategory',compact('nextsubcategory','category'));

    } 

    public function store(Request $request){
    	

    	$data=array();
    	$data['category_id']=$request->category_id;
    	$data['subcategory_id']=$request->subcategory_id;
    	$data['lastlevel']=$request->lastlevel;

    	DB::table('lastlavels')->insert($data);


      $notification=array(
            'massage'=>'Category add successfully',
            'alert-type'=>'success'
      );

      return Redirect()->back()->with($notification);
    }


    
 public function EditNextSubCat($id){
    // dd($id);
    $lastlavel = DB::table('lastlavels')->where('id',$id)->first();
    $subcategory = DB::table('subcategories')->get();
    $category = DB::table('categories')->get();
   

    return view('admin.category.nextsubcategoryedit',compact('subcategory','lastlavel','category'));

}


public function updateNextSubCat(Request $request, $id){
 	

    $data = array();
    $data['category_id'] = $request->category_id;
    $data['subcategory_id'] = $request->subcategory_id;
    $data['lastlevel'] = $request->lastlevel;
    DB::table('lastlavels')->where('id',$id)->update($data);
    $notification=array(
            'messege'=>'Next Sub-Category Updated Successfully',
            'alert-type'=>'success'
            );
    return Redirect()->route('nextsub.category')->with($notification); 
}


public function DeleteNextSubCat($id){

    
    DB::table('lastlavels')->where('id',$id)->delete();
   $notification=array(
           'messege'=>'Next Sub-Category Deleted Successfully',
           'alert-type'=>'success'
            );
          return Redirect()->back()->with($notification);
}




}
