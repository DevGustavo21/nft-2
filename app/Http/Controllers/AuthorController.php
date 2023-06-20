<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Collection;
use App\Models\Item;
use App\Models\User;
use Illuminate\Http\Request;

class AuthorController extends Controller
{

    public function index()
    {
        $authors = User::all();
        return view('authors', ['authors' => $authors]);
    }


    public function show($name)
    {
        $author = User::with('items')->where('name', $name)->firstOrFail();
        $categories = Category::all();
        $collections = Collection::all();

        return view('author', [
            'author' => $author,
            'categories' => $categories,
            'collections' => $collections,
            'items' => $author->items,
        ]);
    }



}
