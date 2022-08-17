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
        'title'  => "Beranda"
    ]);
});

Route::get('/pinjam', [BukuController::class, 'index']);

Route::get('/bukus/{buku:slug}', [BukuController::class, 'show']);

Route::get('/user/{user:username}', function(User $user){
    return view('user', [
        'title' => 'Penulis',
        'name'  => $user->name,
        'books' => $user->books
    ]);
});

Route::get('/categories', function() {
    return view('categories', [
        'title' => 'Categories',
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category){
    return view('category', [
        'title' => $category->name,
        'books' => $category->books,
        'category' => $category->name
    ]);
});

