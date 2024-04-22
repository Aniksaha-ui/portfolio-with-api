<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class OurMissionController extends Controller
{
    public function index()
    {
        $mission = DB::table('pagesetups')->where('page_id', 24)->where('section_id', 'Our Mission Text')->first();

        return view('Website.mission', compact('mission'));
    }
}