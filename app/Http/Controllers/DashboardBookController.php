<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Category;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;

class DashboardBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.books.index', [
            'books' => Buku::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.books.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul'     => 'required|max:255',
            'slug'      => 'required|unique:bukus',
            'category_id'   => 'required',
            'desc'      => 'required'
        ]);
        $validatedData['user_id'] = auth()->user()->id;
        
        Buku::create($validatedData);

        return redirect('dashboard/buku')->with('success', 'New book has been added ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function show(Buku $buku)
    {
        return view('dashboard.books.show', [
            'buku' => $buku
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function edit(Buku $buku)
    {
        return view('dashboard.books.edit', [
            'buku'  => $buku,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Buku $buku)
    {
        $rules = [
            'judul'     => 'required|max:255',
            'category_id'   => 'required',
            'desc'      => 'required'
        ];

        if($request->slug != $buku->slug){
            $rules['slug'] = 'required|unique:bukus';
        }

        $validatedData['user_id'] = auth()->user()->id;

        $validatedData = $request->validate($rules);

        Buku::where('id', $buku->id)
            ->update($validatedData);

        return redirect('dashboard/buku')->with('success', 'Book has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buku $buku)
    {
        Buku::destroy($buku->id);

        return redirect('dashboard/buku')->with('success', 'Book has been deleted');
    }

    public function cekSlug(Request $request)
    {
        $slug = SlugService::createSlug(Buku::class, 'slug', $request->title);

        return response()->json(['slug' => $slug]);
    }
}
