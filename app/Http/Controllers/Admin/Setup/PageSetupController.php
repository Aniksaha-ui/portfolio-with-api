<?php

namespace App\Http\Controllers\Admin\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Image;

class PageSetupController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {

        $pageNames = DB::table('codemas')->where('hardcode', 'page')->get();
        $sectionNames = DB::table('codemas')->where('hardcode', 'section')->get();

        $page = DB::table('pagesetups')
            ->join('codemas', 'pagesetups.page_id', 'codemas.id')
            ->select('pagesetups.*', 'codemas.value')
            ->get();

        // dd($page);

        return view('admin.setup.page.page', compact('page', 'pageNames', 'sectionNames'));

    }

    public function store(Request $request)
    {

        // dd($request->img);
        for ($i = 0; $i < count($request->img); $i++) {

            $data = array();
            $data['page_id'] = $request->page_id;
            $data['section_id'] = $request->section_id;
            $data['header_text'] = $request->header_text;
            $data['sub_text'] = $request->sub_text;
            $right_image = $request->img[$i];


            if ($right_image) {
                $image_name = hexdec(uniqid()) . '.' . $right_image->getClientOriginalExtension();
                Image::make($right_image)->save('image/page/' . $image_name);
                $data['img'] = 'image/page/' . $image_name;
            }

            $pageSetup = DB::table('pagesetups')->insert($data);
        }

        $notification = array(
            'massage' => 'Pagesetup Added successfully',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);

    }

    public function Editpage($id)
    {

        $pagesetup = DB::table('pagesetups')->where('id', $id)->first();
        // dd($pagesetup);
        return view('admin.setup.page.editpage', compact('pagesetup'));
    }


    public function Updatepagesetup(Request $request, $id)
    {
        // dd($id);
        $oldlogo = $request->img;
        $data = array();
        $data['header_text'] = $request->header_text;
        $data['sub_text'] = $request->sub_text;
        // $image = $request->file('brand_logo');
        $right_image = $request->file('brand_logo');


        if ($right_image) {

            unlink($oldlogo);

            // --previous system 
            // $image_name = date('dmy_H_s_i');
            // $ext = strtolower($image->getClientOriginalExtension());
            // $image_full_name = $image_name.'.'.$ext;
            // $upload_path = 'image/product';
            // $image_url = $upload_path.$image_full_name;
            // $success = $image->move($upload_path,$image_full_name);
            // $data['img'] = $image_url;
            // $right_image= $request->file('brand_logo');

            $image_name = hexdec(uniqid()) . '.' . $right_image->getClientOriginalExtension();
            Image::make($right_image)->save('image/page/' . $image_name);
            $data['img'] = 'image/page/' . $image_name;
            $pagesetup = DB::table('pagesetups')->where('id', $id)->update($data);
            $notification = array(
                'massage' => 'Pagesetup Updated successfully',
                'alert-type' => 'success'
            );
        } else {
            // dd($data);

            $pagesetup = DB::table('pagesetups')->where('id', $id)->update($data);
            $notification = array(
                'massage' => 'Pagesetup Updated successfully',
                'alert-type' => 'success'
            );
        }


        return Redirect()->route('admin.pagesetup')->with($notification);
    }


}