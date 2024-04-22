<?php

namespace App\Http\Controllers\Admin\setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class ContactMasterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(){
        $contacts = DB::table('contactinfos')->get();
        return view('admin.setup.contactmaster.contactmaster',compact('contacts'));
    }

    public function store(Request $request){

        $data=array();
        $data['person_name']= $request->person_name;
        $data['designation']= $request->designation;
        $data['address']= $request->address;
        $data['cell_1']= $request->cell_1;
        $data['cell_2']= $request->cell_2;
        $data['email_1']= $request->email_1;
        $data['email_2']= $request->email_2;
        $data['email_3']= $request->email_3;

        DB::table('contactinfos')->insert($data);
        $notification=array(
            'massage'=>'Contact add successfully',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }
    public function edit($id){

            $contact = DB::table('contactinfos')->where('id',$id)->first();
            return view('admin.setup.contactmaster.editcontactmaster',compact('contact'));

    }

    public function update(Request $request,$id){

        $data = array();
        $data['person_name'] = $request->person_name;
        $data['designation'] = $request->designation;
        $data['address'] = $request->address;
        $data['email_1'] = $request->email_1;
        $data['email_2'] = $request->email_2;
        $data['email_3'] = $request->email_3;
        $data['cell_1'] = $request->cell_1;
        $data['cell_2'] = $request->cell_2;

        DB::table('contactinfos')->where('id', $id)->update($data);
        $notification = array(
            'massage' => 'Contact Information Updated successfully',
            'alert-type' => 'success'
        );
        return Redirect()->route('contactmaster')->with($notification);

    }

    public function delete($id){
        DB::table('contactinfos')->where('id',$id)->delete();


      $notification=array(
            'massage'=>'Contact Deleted successfully',
            'alert-type'=>'success'
      );

      return Redirect()->back()->with($notification);
    }
}
