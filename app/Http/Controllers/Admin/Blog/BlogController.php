<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class BlogController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }
   public function index(){
        $blogs = DB::table('blogs')->get();
        return view('admin.myblogs.index',compact('blogs'));
   }

   public function create(){
        return view('admin.myblogs.create');
   }


   public function store(Request $request){
    $data = array();
    $data['title'] = $request->title;
    $data['description'] = $request->description;
    $data['short_description'] = $request->short_description;
    $data['type'] = $request->type;
    $data['icon_name'] = $request->icon_name;
    DB::table('blogs')->insert($data);
    
     $notification=array(
          'massage'=>'Blog add successfully',
          'alert-type'=>'success'
    );
         return Redirect()->back()->with($notification); 
}

 public function singleBlogDetails($blogId){
     $blog = DB::table('blogs')->where('id',$blogId)->first();
     return view('admin.myblogs.viewdetails',compact('blog'));
 }    


public function deleteSingleBlog($id){
    
       $blog=DB::table('blogs')->where('id',$id)->delete();
       $notification=array(
            'massage'=>'blog deleted successfully',
            'alert-type'=>'success'
      );
    	   return Redirect()->back()->with($notification);

}

    
}
