@extends('layouts.main')

@section('container')
    <h1>Halaman Kategori {{ $category }}</h1>
    <br><br>
    @foreach ($books as $book)
    <article class="mb-5">
        <h3>
            <a href="/bukus/{{ $book->slug }}">
                {{ $book->judul }}
            </a>
        </h3>
        <h4>{{ $book->desc }}</h4>
    </article>
    @endforeach
@endsection