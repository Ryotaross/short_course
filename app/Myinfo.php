<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Myinfo extends Model
{
    //
    public function users() {
        return $this->belongs('App\User');
        }
        protected $fillable = [
            'best_score',
            'favorite',
            'start',
        ];
}
