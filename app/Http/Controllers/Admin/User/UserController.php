<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use DB;
class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(){

    	$users=DB::table('users')->get();
    	return view('admin.users.user',compact('users'));

    }

    public function store(Request $request){
    	$validateData = $request->validate([
    		'name' => 'required',
    		'email' => 'required',
    		'phone' => 'required',
            'present_address'=>'required'
    	]);

    	$data=array();
    	$data['name']=$request->name;
    	$data['email']=$request->email;
    	$data['phone']=$request->phone;
    	$data['present_address']=$request->present_address;
        $data['password'] = Hash::make('123456');
    	DB::table('users')->insert($data);


      $notification=array(
            'massage'=>'User add successfully',
            'alert-type'=>'success'
      );

      return Redirect()->back()->with($notification);
    }


    public function delete($id){

    	DB::table('users')->where('id',$id)->delete();


      $notification=array(
            'massage'=>'User Deleted successfully',
            'alert-type'=>'success'
      );

      return Redirect()->back()->with($notification);

    }


    public function edit($id){
    	$user=DB::table('users')->where('id',$id)->first();
    	return view('admin.users.useredit',compact('user'));
    }


    public function update(Request $request,$id){

        $validateData = $request->validate([
    		'name' => 'required',
    		'email' => 'required',
    		'phone' => 'required',
            'present_address'=>'required'
    	]);
    	
        
    	$data=array();
    	$data['name']=$request->name;
    	$data['email']=$request->email;
    	$data['phone']=$request->phone;
    	$data['present_address']=$request->present_address;
        // $data['password'] = Hash::make('123456');
    	$update = DB::table('users')->where('id',$id)->update($data);

    	if ($update) {

                  $notification=array(
            'massage'=>'User Updated successfully',
            'alert-type'=>'success'
            );
    		return Redirect()->route('admin.users')->with($notification);
	
    	}


    	else{

          $notification=array(
            'massage'=>'Nothing to Update',
            'alert-type'=>'success'
      );
    	
    		return Redirect()->route('admin.users')->with($notification);	
    	}

    }
}