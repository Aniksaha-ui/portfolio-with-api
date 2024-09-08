<?php

namespace App\Repository\Interfaces;

use Illuminate\Http\Request;

interface ContactInterface{
    public function contact(array $request);
}