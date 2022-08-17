@extends('layouts.main')

@section('container')
    <h1>Halaman Peminjaman Buku</h1>
    <br><br>
    @foreach ($books as $book)
    <article class="mb-5">
        <h3>
            <a class="text-decoration-none" href="/bukus/{{ $book->slug }}">
                {{ $book->judul }}
            </a>
        </h3>
        <h6>
            By <a href="/user/{{ $book->user->username }}" class="text-decoration-none"> {{ $book->user->name }} </a> 
            in <a href="/categories/{{ $book->category->slug }}" class="text-decoration-none"> {{ $book->category->name }} </a>
        </h6>
        <p>{{ $book->desc }}</p>
    </article>
    @endforeach
@endsection