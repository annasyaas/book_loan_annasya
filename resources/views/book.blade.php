@extends('layouts.main')
{{-- @dd($book) --}}
@section('container')
    <h3>Halaman Buku</h3>    
    <br>
    <article>
        <h4>ID Buku : {{ $book['id'] }}</h4>
        <h5>Judul Buku : {{ $book['buku'] }}</h5>
        <h5>Deskripsi Buku : {{ $book['desc'] }}</h5>
    </article>
    <br>
    <a href="/pinjam">Back</a>
@endsection

