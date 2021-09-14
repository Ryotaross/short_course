<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //
    protected $fillable = [
        'score',
        'body',
    ];
    public function user() {
        return $this->belongsTo('App\User');
        }
    public function course() {
        return $this->belongsTo('App\Course');
    }
}
