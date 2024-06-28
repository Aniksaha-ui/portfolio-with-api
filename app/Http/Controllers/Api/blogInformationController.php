<?php

namespace App\Http\Controllers\Api;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class blogInformationController extends Controller
{
    public function getBlogs(){
        $blogs = DB::table('blogs')->get();
        if(count($blogs) > 0){
            log::info('number of blogs'.count($blogs));
            $response = ['isExecute'=> true,'data'=>$blogs,'message'=>'Blog Information'];
            return response()->json($response);
        }else {
            $response = ['isExecute'=> true,'data'=>[],'message'=>' No found data'];

            return response()->json($response);
        }
    }


    public function getSingleBlogs($id){
        $blog = DB::table('blogs')->where('id',$id)->first();
        if($blog){
            log::info('Blog read for'.$id);
            $response = ['isExecute'=> true,'data'=>$blog,'message'=>' No found data'];
            return response()->json($response);
        }else {
            $response = ['isExecute'=> true,'data'=>[],'message'=>' No found data'];

            return response()->json($response);
        }
    }
}
