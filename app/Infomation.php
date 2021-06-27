<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Infomation extends Model
{
    //
    protected $fillable = [
        'highway',
        'price',
        'card',
        'off',
        'workTime',
        'cart',
        'dish',
        'spa',
        'rental',
    ];
}
