<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contactinfo extends Model
{
    
    protected $fillable = [
        'person_name',
        'designation',
        'cell_1',
        'cell_2',
        'email_1',
        'email_2',
        'email_3',
        'address',
    ];
}
