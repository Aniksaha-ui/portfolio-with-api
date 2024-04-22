<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class HomePageController extends Controller
{
    public function index(){
        $category = DB::table('categories')->get();
        // dd($category);
        $imageLink = DB::table('codemas')->where('hardcode',"image Link")->first();
        $carosuel = DB::table('pagesetups')->where('page_id',3)->where('section_id',"Welcome Section")->first();
        $service = DB::table('pagesetups')->where('page_id',3)->where('section_id','Service Section')->first();
        // dd($service);
        return view('Website.homepage',compact('carosuel','imageLink','service','category'));
    }
}
