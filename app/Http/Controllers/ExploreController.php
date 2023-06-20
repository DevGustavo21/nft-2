<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Collection;
use App\Models\Item;
use Illuminate\Http\Request;

class ExploreController extends Controller
{
    public function index(){
        $items = Item::all();
        $category = Category::all();
        $collection = Collection::all();

        return view('explore', compact('items', 'category', 'collection'));
    }

    public function filter(Request $request)
    {
        $query = Item::with('user', 'likes')->withCount('likes');

        if($request->filled('category')){
            $category = $request->input('category');
            $query->whereIn('category_id', $category);
        }


        if($request->filled('collection')){
            $collection = $request->input('collection');
            $query->whereIn('collection_id', $collection);
        }


        $items = $query->get();
        $category = Category::all();
        $collection = Collection::all();

        return view('explore', compact('category', 'collection', 'items'));
    }
}
