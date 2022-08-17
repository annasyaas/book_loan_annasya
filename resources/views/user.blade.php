@extends('layouts.main')

@section('container')
    <h1>Daftar Buku by {{ $name }}</h1>
    <br><br>
    @foreach ($books as $book)
    <article class="mb-5">
        <h5>{{ $book->judul }}</h5>
        <h6>By <a href="/user/{{ $book->user->username }}" class="text-decoration-none"> {{ $book->user->name }} </a> in 
            <a class="text-decoration-none" href="/categories/{{ $book->category->slug }}">
            {{ $book->category->name }}</a></h6>
        <h5>{{ $book->desc }}</h5>
    </article>
    @endforeach
@endsection