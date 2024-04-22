<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class companymaster extends Model
{
    protected $fillable = [
        'name',
        'NOC',
        'corporate_office',
        'telephone_1',
        'telephone_2',
        'email_1',
        'email_2',
        'ceo',
        'chairman',
        'director',
        'ceo_phone_1',
        'ceo_phone_2',
        'chairman_phone_1',
        'chairman_phone_2',
        'director_phone_1',
        'director_phone_2'
    ];
}