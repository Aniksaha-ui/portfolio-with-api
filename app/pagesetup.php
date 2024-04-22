<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pagesetup extends Model
{
    protected $fillable = [
        'section_id', 'header_text', 'sub_text', 'img'
    ];
}
