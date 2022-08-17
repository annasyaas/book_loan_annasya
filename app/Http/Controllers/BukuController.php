<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index(){
        return view('book-loan', [
            'title' => 'Peminjaman',
            'books' => Buku::latest()->get()
        ]);
    }

    public function show(Buku $buku){
        return view('book', [
            'title' => 'Buku',
            'book'  => $buku
        ]);
    }
}
