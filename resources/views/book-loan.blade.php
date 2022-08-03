@extends('layouts.main')

@section('container')
    <h1>Halaman Peminjaman Buku</h1>
    <br><br>
    @foreach ($books as $book)
    <article class="mb-5">
        <h3>
            <a href="/buku/{{ $book['id'] }}">
                {{ $book['buku'] }}
            </a>
        </h3>
        <h4>{{ $book['desc'] }}</h4>
    </article>
    @endforeach
@endsection