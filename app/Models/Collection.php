<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'collection_img',
        'user_id'

    ];

    public function items(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Item::class);
    }

    public function likes(): \Illuminate\Database\Eloquent\Relations\MorphMany
    {
        return $this->morphMany('App\Models\Like', 'likeable');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function getTotalLikes(Collection $collection)
    {
        $totalLikes = $collection->likes_count;
        return response()->json(['totalLikes' => $totalLikes]);
    }
}
