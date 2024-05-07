<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class BlogController extends Controller
{
    public function getBlogs(){
        $blogs = DB::table('pagesetups')->where('page_id',19)->get();
        return view('Website.blogs',compact('blogs'));
    }

    public function singleBlogDetails($blogId){
        $blogDetails = DB::table('pagesetups')->where('id',$blogId)->first();
        return view('Website.blogDetails',compact('blogDetails'));
        
    }
}
