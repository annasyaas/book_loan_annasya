<?php

use App\Http\Controllers\BukuController;
use App\Models\Category; 
use App\Models\User; 
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('landing-page', [
        'title'  => "Beranda",
        'active' => 'beranda'
    ]);
});

Route::get('/buku', [BukuController::class, 'index']);

Route::get('/bukus/{buku:slug}', [BukuController::class, 'show']);

Route::get('/user/{user:username}', function(User $user){
    return view('user', [
        'title' => 'Penulis',
        'name'  => $user->name,
        'books' => $user->books->load(['user', 'category'])
    ]);
});

Route::get('/categories', function() {
    return view('categories', [
        'title' => 'Categories',
        'active' => 'kategori',
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category){
    return view('category', [
        'title' => "Post By Category : $category->name",
        'active' => 'kategori',
        'books' => $category->books->load(['user', 'category']),
    ]);
});

