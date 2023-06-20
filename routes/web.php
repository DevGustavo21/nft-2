<?php

use App\Http\Controllers\CreateCollectionController;
use App\Http\Controllers\CreateItemController;
use App\Http\Controllers\ExploreController;
use App\Http\Controllers\FollowerController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthorController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/dashboard', [ItemController::class, 'index'])->name('dashboard');
Route::get('/', [ItemController::class, 'index'])->name('home');

//Route::get('/create_item', function () {
//    return view('create_item');
//})->middleware(['auth', 'verified'])->name('create_item');

Route::post('/images', [ImageController::class, 'store'])->name('image.store');

Route::get('users/{name}/items/{item}', [ItemController::class, 'show'])->name('items.show');
Route::get('/authors', [AuthorController::class, 'index'])->name('authors');
Route::get('/author/{user:name}', [AuthorController::class, 'show'])->name('author.show');
Route::get('/explore', [ExploreController::class, 'index'])->name('explore');
Route::get('/items/{item}/total-likes', [ItemController::class, 'getTotalLikes'])->name('items.total-likes');
Route::post('/explore/filter', [ExploreController::class, 'filter'])->name('explore.filter');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/create_item', [CreateItemController::class, 'index'])->name('create');
    Route::post('/create', [CreateItemController::class, 'store'])->name('create-item.store');
    Route::post('/like_item', [ItemController::class, 'like'])->name('like-item.like');
    Route::post('/items/{item}/like', [ItemController::class, 'like'])->name('items.like');

    Route::post('/collection/{collection}/like', [CreateCollectionController::class, 'like'])->name('collection.like');

    Route::post('/author/{user:name}/follow', [FollowerController::class, 'store'])->name('follow.show');
    Route::delete('/author/{user:name}/follow', [FollowerController::class, 'destroy'])->name('follow.delete');



    Route::get('/collection', [CreateCollectionController::class, 'index'])->name('collection');
    Route::post('/collection-store', [CreateCollectionController::class, 'store'])->name('collection.store');
});

Route::get('/users', function () {
    $users = User::all();
    return view('users.index', compact('users'));
});

require __DIR__.'/auth.php';
