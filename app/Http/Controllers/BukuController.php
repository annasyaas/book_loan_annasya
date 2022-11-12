<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index(){
        
        $title = '';

        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        } 
        if(request('author')){
            $user = User::firstWhere('username', request('author'));
            $title = ' by ' . $user->name;
        } 

        return view('book-loan', [
            'title' => 'All Books' . $title,
            'books' => Buku::latest()->filter(request(['search', 'category', 'author']))->paginate(3)->withQueryString()
        ]);
    }

    public function show(Buku $buku){
        return view('book', [
            'title' => 'Buku',
            'book'  => $buku
        ]);
    }
}
