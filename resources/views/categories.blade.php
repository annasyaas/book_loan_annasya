@extends('layouts.main')

@section('container')
    <h1>Halaman {{ $title }}</h1>
    <br><br>
    @foreach ($categories as $category)
    <article class="mb-5">
        <h3>
            <a href="/categories/{{ $category->slug }}">
                {{ $category->name }}
            </a>
        </h3>
    </article>
    @endforeach
@endsection