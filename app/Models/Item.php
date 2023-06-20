<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'price',
        'title',
        'description',
        'royalties',
        'size',
        'img_item',
        'category_id',
        'collection_id',
        'user_id',
    ];



    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


    public function likes()
    {
        return $this->morphMany(Like::class, 'likeable');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getTotalLikes(Item $item)
    {
        $totalLikes = $item->likes_count;
        return response()->json(['totalLikes' => $totalLikes]);
    }


}
