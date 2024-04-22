<?php

namespace App\Http\Controllers\Admin\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class CompanyMasterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $company = DB::table('companymasters')->get();
        return view('admin.setup.companymaster.companymaster', compact('company'));
    }


    public function store(Request $request)
    {

    }

    public function EditCompany($id)
    {
        $company = DB::table('companymasters')->where('id', $id)->first();
        return view('admin.setup.companymaster.editcompany', compact('company'));
    }
    public function UpdateCompany(Request $request, $id)
    {
        $data = array();
        $data['name'] = $request->name;
        $data['NOC'] = $request->NOC;
        $data['corporate_office'] = $request->corporate_office;
        $data['telephone_1'] = $request->telephone_1;
        $data['telephone_2'] = $request->telephone_2;
        $data['email_1'] = $request->email_1;
        $data['email_2'] = $request->email_2;
        $data['ceo'] = $request->ceo;
        $data['ceo_phone_1'] = $request->ceo_phone_1;
        $data['ceo_phone_2'] = $request->ceo_phone_2;
        $data['chairman'] = $request->chairman;
        $data['chairman_phone_1'] = $request->chairman_phone_1;
        $data['chairman_phone_2'] = $request->chairman_phone_2;
        $data['director'] = $request->director;
        $data['director_phone_1'] = $request->director_phone_1;
        $data['director_phone_2'] = $request->director_phone_2;
        DB::table('companymasters')->where('id', $id)->update($data);

        $notification = array(
            'massage' => 'Company Updated successfully',
            'alert-type' => 'success'
        );
        return Redirect()->route('companymaster')->with($notification);

    }

}