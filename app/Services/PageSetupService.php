<?php

namespace App\Services;

use DB;
use Illuminate\Support\Facades\Cache;

class PageSetupService
{
    public function getData(){

        $imageLink = DB::table('codemas')->where('hardcode',"image Link")->first();

        $serviceSection = DB::table('pagesetups')->where('page_id',3)->where('section_id','Service Section')->first();

        $whyChooseUs = DB::table('pagesetups')->where('page_id',3)->where('section_id','WhyChooseUs')->first();

        $sliders = DB::table('pagesetups')->where('page_id',3)->where('section_id','Herosection')->get();

        $aboutUs = DB::table('pagesetups')->where('page_id',3)->where('section_id','About Us')->first();

        $services =  DB::table('pagesetups')->where('page_id',3)->where('section_id','Service Section')->get();

        $learnings = DB::table('pagesetups')->where('page_id',3)->where('section_id','learningTopics')->get();
        $latestBlogs = DB::table('pagesetups')
                      ->where('page_id',19)
                      ->where('section_id','blogs')
                      ->take(6)
                      ->orderBY('id',"desc")->get();
        return [
            "imageLink"=>$imageLink,
            "service_section"=>$serviceSection,
            "whyus"=>$whyChooseUs,
            "sliders"=>$sliders,
            "aboutUs" => $aboutUs,
            "ourservices" =>$services,
            "learnings" => $learnings,
            "latestBlogs"=>$latestBlogs 
        ];
    }

    public function getServiceInformation(){
        $serviceSection = DB::table('pagesetups')->where('page_id',3)->where('section_id','Service Section')->first();
        $services =  DB::table('pagesetups')->where('page_id',3)->where('section_id','Service Section')->get();
        return [
            'serviceSection' => $serviceSection,
            'ourservices' => $services
        ];
    }


    public function getblogPageInformation(){
        $blogs = DB::table('pagesetups')
                      ->where('page_id',19)
                      ->where('section_id','blogs')
                      ->take(6)
                      ->orderBY('id',"desc")->get();
        return [
        'blogs' => $blogs
        ];                     
    }
    public function getBlogDetailsPageInformation($id){
        $blogs = DB::table('pagesetups')
        ->where('page_id',19)
        ->where('section_id','blogs')
        ->where('id',$id)
        ->orderBY('id',"desc")->first();
        return [
            'blogs' => $blogs
        ]; 
    }



}
