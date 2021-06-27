<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Course extends Model
{
    //
    protected $fillable = [
        'name',
        'address',
        'area',
        'number',
        'hp',
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
    public function infomation()
    {
        return $this->hasOne('App\Infomation');
    }
    public function hole()
    {
        return $this->hasMany('App\Hole');
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo('App\User');
    }
    public function likes(): BelongsToMany
    {
        return $this->belongsToMany('App\User', 'likes')->withTimestamps();
    }
    public function isLikedBy(?User $user): bool
    {
        return $user
            ? (bool)$this->likes->where('id', $user->id)->count()
            : false;
    }
    public function getCountLikesAttribute(): int
    {
        return $this->likes->count();
    }
    public function wents(): BelongsToMany
    {
        return $this->belongsToMany('App\User', 'wents')->withTimestamps();
    }
    public function isWentBy(?User $user): bool
    {
        return $user
            ? (bool)$this->wents->where('id', $user->id)->count()
            : false;
    }
    public function getCountWentsAttribute(): int
    {
        return $this->wents->count();
    }
    public function reviews() {
        return $this->hasMany('App\Review');
    }
}
