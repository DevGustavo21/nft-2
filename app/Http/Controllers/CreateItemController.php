<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Collection;
use App\Models\User;
use App\Models\Item;
use Illuminate\Http\Request;

class CreateItemController extends Controller
{

    public function index(User $user)
    {
        $categories = Category::all()->keyBy('id');
        $collections = Collection::all()->keyBy('id');
        $users = User::all()->keyBy('id');

        return view('create_item', ['users' => $users, 'categories' => $categories, 'collections' => $collections]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'price' => ['required'],
            'title'=>['required'],
            'description'=>['required'],
            'royalties'=>['required'],
            'size'=>['required'],
            'img_item'=>['required']
        ]);

        Item::create([
            'price' => $request->price,
            'title'=>$request->title,
            'description'=>$request->description,
            'royalties'=>$request->royalties,
            'size'=>$request->size,
            'img_item'=>$request->img_item,
            'category_id'=>$request->category_id,
            'collection_id'=>$request->collection_id,
            'user_id'=>auth()->user()->id
        ]);

        return redirect()->route('create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
