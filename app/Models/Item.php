<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    public function likes(): \Illuminate\Database\Eloquent\Relations\MorphMany
    {
        return $this->morphMany('App\Models\Like', 'likeable');
    }
}

