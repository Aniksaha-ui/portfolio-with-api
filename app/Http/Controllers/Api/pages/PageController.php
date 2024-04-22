<?php
namespace App\Http\Controllers\Api\pages;

use App\Http\Controllers\Controller;

class PageController extends Controller
{

    private $pageSetupService;
    public function __construct(\App\Services\PageSetupService $pageSetupService){
        $this->pageSetupService = $pageSetupService;
    }

    public function getHomePageInformation()
    {
        try{

            $data = $this->pageSetupService->getData();
            $response = array();
            $response['status'] = "success";
            $response['statusCode'] = 200;
            $response['data'] = $data;
            return response()->json($response);

        }catch(\Exception $e){

        }

    }
}
