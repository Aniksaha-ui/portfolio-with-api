<?php

namespace App\Http\Controllers\Admin\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class OfficeMasterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $office = DB::table('officeinfos')->get();
        return view('admin.setup.officemaster.officemaster', compact('office'));
    }

    public function store(Request $request)
    {
        $data = array();
        $data['title'] = $request->title;
        $data['company_name'] = $request->company_name;
        $data['office_address'] = $request->office_address;
        DB::table('officeinfos')->insert($data);
        ;
        $notification = array(
            'massage' => 'Office Information Updated successfully',
            'alert-type' => 'success'
        );
        return Redirect()->route('officemaster')->with($notification);

    }
    public function edit($id)
    {

        $office = DB::table('officeinfos')->where('id', $id)->first();
        return view('admin.setup.officemaster.editofficemaster', compact('office'));
    }
    public function update(Request $request, $id)
    {
        $data = array();
        $data['title'] = $request->title;
        $data['company_name'] = $request->company_name;
        $data['office_address'] = $request->office_address;
        DB::table('officeinfos')->where('id', $id)->update($data);
        $notification = array(
            'massage' => 'Office Information Updated successfully',
            'alert-type' => 'success'
        );
        return Redirect()->route('officemaster')->with($notification);
    }


    public function delete($id)
    {
        DB::table('officeinfos')->where('id', $id)->delete();


        $notification = array(
            'massage' => 'Office Deleted successfully',
            'alert-type' => 'success'
        );

        return Redirect()->back()->with($notification);
    }

}