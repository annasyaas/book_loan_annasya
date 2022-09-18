<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index(){
        return view('book-loan', [
            'title' => 'Semua Buku',
            'active' => 'buku',
            'books' => Buku::latest()->filter(request(['search', 'category', 'author']))->get()
        ]);
    }

    public function show(Buku $buku){
        return view('book', [
            'title' => 'Buku',
            'active' => 'buku',
            'book'  => $buku
        ]);
    }
}
