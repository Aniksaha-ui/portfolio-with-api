<?php

namespace App\Repository\Services;

use App\contact;
use App\Http\Controllers\Api\contactInfotmation;
use App\Repository\Interfaces\ContactInterface;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use DB;

class ContactService implements ContactInterface{

    protected $contact;

    public function contact(array $request)
    {
        try{
            $contact =array();
            $contact['name'] = $request['name'] ?? 'N/A';
            $contact['phone_number'] = $request['phone_number'] ?? 'N/A';
            $contact["email"] = $request['email'] ?? 'N/A';
            $contact["subject"] = $request['subject'] ?? 'default';
            $contact["message"] = $request['message'] ?? 'default';
            $contactInformation = DB::table('contacts')->insert($contact);
            
            if($contactInformation){
                return true;
            }else{
                return false;
            }
        }catch(Exception $ex){
            Log::alert($ex->getMessage());
        }
    }

}

