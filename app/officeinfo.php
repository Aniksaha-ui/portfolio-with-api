<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class officeinfo extends Model
{
    protected $fillable = [
        'account_holder','office_address'
    ];
}
