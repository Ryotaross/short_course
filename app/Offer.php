<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    //
     protected $fillable = [
        'body',
    ];
    public function user() {
        return $this->belongsTo('App\User');
        }
    public function course() {
        return $this->belongsTo('App\Course');
    }
}
