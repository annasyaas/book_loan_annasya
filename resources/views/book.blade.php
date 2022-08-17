@extends('layouts.main')
{{-- @dd($book) --}}
@section('container')
    <h3>Halaman Buku</h3>    
    <br>
    <article>
        <h5>{{ $book->judul }}</h5>
        <h6>By <a href="/user/{{ $book->user->id }}" class="text-decoration-none"> {{ $book->user->name }} </a> in 
            <a href="/categories/{{ $book->category->slug }}">
            {{ $book->category->name }}</a></h6>
        <h5>{{ $book->desc }}</h5>
    </article>
    <br>
    <a href="/pinjam">Back</a>
@endsection

