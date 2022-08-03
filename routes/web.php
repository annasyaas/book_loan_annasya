<?php

use App\Models\Buku;
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
    return view('landing-page',[
        'title'  => "Beranda"
    ]);
});


Route::get('/pinjam', function () {
    $book_posts = [
        [
            'id'    => 1,
            'buku'  => 'judul buku 1',
            'desc'  => 'about buku 1'
        ],
        [
            'id'    => 2,
            'buku'  => 'judul buku 2',
            'desc'  => 'about buku 2'
            ]
        ];
        
        return view('book-loan', [
            'title' => 'Peminjaman',
            'books' => $book_posts
        ]);
    });

Route::get('/buku/{id}', function($id) {
    $book_posts = [
        [
            'id'    => 1,
            'buku'  => 'judul buku 1',
            'desc'  => 'about buku 1'
        ],
        [
            'id'    => 2,
            'buku'  => 'judul buku 2',
            'desc'  => 'about buku 2'
        ]
    ];

    $new_books = [];
    foreach($book_posts as $book){
        if($book['id'] == $id){
            $new_books = $book;
        }
    }
    // dd($new_books);
    return view('book', [
        'title' => 'Buku',
        'id'    => $id,
        'book'  => $new_books
    ]);
});