<?php

namespace App\Http\Controllers\Admin\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class CodeMasterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(){
        $codemas = DB::table('codemas')->where('hardcode','!=','xx')->get();
        $keyword = DB::table('codemas')->where('hardcode','xx')->get();
        return view('admin.setup.codemaster.codemas',compact('codemas','keyword'));

    }
    public function store(Request $request){
        // dd($request->all());
        $first = '00';
        $second = '0';
        // $softcode = 'xx';
        $max = DB::table('codemas')->where('hardcode','!=','xx')->where('hardcode',$request->softcode)->max('softcode');
        
        $maxvalue = (int)$max + 1;
        $maxresult = strval($maxvalue);
         if(strlen($maxresult)==1){
            $softcode = $first . '' . $maxvalue;
         } else if(strlen($maxresult)==2){
            $softcode = $second . '' . $maxvalue;
            
         }

        $data=array();
    	$data['hardcode'] = $request->softcode;
    	$data['softcode'] = $softcode;
    	$data['value'] = $request->value;

        DB::table('codemas')->insert($data);


        $notification=array(
              'massage'=>'Code add successfully',
              'alert-type'=>'success'
        );
  
        return Redirect()->back()->with($notification);
    }
    public function DeleteCode($id){}
    public function Editcode($id){}
    public function Updatecodemas(Request $request,$id){}


    //color master setup
    public function color(){
            $codemas = DB::table('codemas')->where('hardcode','!=','xx')->where('hardcode','color')->get();
            $keyword = DB::table('codemas')->where('softcode','color')->get();
            return view('admin.setup.colormaster.colormas',compact('codemas','keyword'));
    
        }
    public function size(){
            $codemas = DB::table('codemas')->where('hardcode','!=','xx')->where('hardcode','size')->get();
            $keyword = DB::table('codemas')->where('softcode','size')->get();
            return view('admin.setup.sizemaster.sizemas',compact('codemas','keyword'));
    
        }



}
