<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;

    public function items(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany('App\Models\Item');
    }

    public function likes(): \Illuminate\Database\Eloquent\Relations\MorphMany
    {
        return $this->morphMany('App\Models\Like', 'likeable');
    }
}
