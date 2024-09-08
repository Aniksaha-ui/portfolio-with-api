<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repository\Services\ContactService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class contactInfotmation extends Controller
{
    protected $contactService;

    public function __construct(ContactService $contactService){
        $this->contactService = $contactService;
    }

    public function contact(Request $request){
        try{
            Log::info("----------------------------------------------------------");
            Log::info("Request from " .self::incomingIp());
            Log::info("----------------------------------------------------------");
            $response = $this->contactService->contact($request->all());
            if($response){
                return response()->json([
                    'success' => $response,
                    'message' => 'Contact Information Added successfully',
                    'data' => $response
                ]);
            }
            return response()->json([
                'success' => $response,
                'message' => 'Contact Information can not Added successfully'
            ]);

           
        }catch(Exception $ex){
            Log::alert($ex->getMessage());
        }
    }


    public static function incomingIp()
    {
        Log::info("--------------------------------------------");
        if (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER)) {
            return $_SERVER["HTTP_X_FORWARDED_FOR"];
        } else if (array_key_exists('REMOTE_ADDR', $_SERVER)) {
            return $_SERVER["REMOTE_ADDR"];
        } else if (array_key_exists('HTTP_CLIENT_IP', $_SERVER)) {
            return $_SERVER["HTTP_CLIENT_IP"];
        }
        return 'N/A';
    }
}
