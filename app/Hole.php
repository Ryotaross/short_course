<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hole extends Model
{
    //
    protected $fillable = [
        'hole_number',
        'par',
        'yard',
    ];
}
