<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class ServicePageController extends Controller
{
    public function index(){
        $imageLink = DB::table('codemas')->where('hardcode',"image Link")->first();
        $carosuel = DB::table('pagesetups')->where('page_id',5)->where('section_id',"Header")->first();

        $service = DB::table('pagesetups')->where('page_id',5)->where('section_id','Service Section')->get();
        return view('Website.service',compact('imageLink','carosuel','service'));
    }
}
