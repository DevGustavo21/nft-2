<?php
namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Support\Facades\Auth;

use App\Models\Collection;
use App\Models\Item;
use App\Models\User;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $users = User::all();
        $items = Item::with('author', 'likes')->withCount('likes')->get();
        $collection = Collection::with('items')->get();
//        $collection = Collection::with('items.user', 'items.likes')->get();
        return view('dashboard', ['item' => $items, 'collection'=>$collection, 'users'=>$users]);
    }


    public function show($name, $item)
    {
        $user = User::with('items.likes')->where('name', $name)->firstOrFail();
        $item = $user->items()->with('likes')->all()->findOrFail($item);
        return view('items_detail', ['item' => $item, 'user' => $user]);
    }


    public function like(Request $request, Item $item)
{
    $user = \Illuminate\Support\Facades\Auth::id();

    $existingLike = $item->likes()->where('user_id', $user)->first();

    if ($existingLike) {
        $existingLike->delete();
    } else {
        $item->likes()->create([
            'user_id' => $user
        ]);
    }

    return back();
}



}
