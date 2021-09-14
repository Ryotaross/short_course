<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Myinfo extends Model
{
    //
        protected $fillable = [
            'best_score',
            'favorite',
            'start',
        ];
    public function user() {
        return $this->belongsTo('App\User');
        }
    public function course() {
        return $this->belongsTo('App\Course');
    }
}
