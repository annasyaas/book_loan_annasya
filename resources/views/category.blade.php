@extends('layouts.main')

@section('container')
    <h1>{{ $title }}</h1>
    <br>
    <div class="container">
        <div class="row">
            @foreach ($books as $book)
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="position-absolute px-2 py-1" style="background-color: rgba(0,0,0,0.7)">
                        <a href="/categories/{{ $book->category->slug }}" class="text-decoration-none text-white">
                            {{ $book->category->name }}
                        </a>
                    </div>
                    <img src="..." class="card-img-top" alt="{{ $book->category->name }}">
                    <div class="card-body">
                      <h5 class="card-title">
                        <a class="text-decoration-none" href="/bukus/{{ $book->slug }}">
                            {{ $book->judul }}
                        </a>
                      </h5>
                      <p>
                        <small class="text-muted">
                            By <a href="/user/{{ $book->user->username }}" class="text-decoration-none"> {{ $book->user->name }} </a> 
                            {{-- in <a href="/categories/{{ $book->category->slug }}" class="text-decoration-none"> {{ $book->category->name }} </a> --}}
                            {{ $book->created_at->diffForHumans() }}
                        </small>
                      </p>
                      <p class="card-text">{{ $book->desc }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection