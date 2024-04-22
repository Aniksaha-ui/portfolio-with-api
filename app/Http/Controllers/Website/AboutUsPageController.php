<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class AboutUsPageController extends Controller
{
    public function index()
    {
        $imageLink = DB::table('codemas')->where('hardcode', "image Link")->first();
        $welcome = DB::table('pagesetups')->where('page_id', 4)->where('section_id', 'Welcome Section')->first();
        $question = DB::table('pagesetups')->where('page_id', 4)->where('section_id', 'Question Section')->first();

        $education_title = DB::table('pagesetups')->where('page_id', 4)->where('section_id', 'Education')->first();
        $institution = DB::table('pagesetups')->where('page_id', 4)->where('section_id', 'Institution')->get();

        // dd($team_members);
        return view('Website.aboutus', compact('imageLink', 'welcome', 'question', 'education_title', 'institution'));

    }
}