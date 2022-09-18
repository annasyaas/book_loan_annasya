@extends('layouts.main')

@section('container')
    <h1 class="text-center my-3">{{ $title }}</h1>
    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/buku">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @elseif (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
                    <button class="btn btn-danger" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>
    @if (count($books))
    <div class="container">
        <div class="row">
            @foreach ($books as $book)
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="position-absolute px-2 py-1" style="background-color: rgba(0,0,0,0.7)">
                        <a href="/buku?category={{ $book->category->slug }}" class="text-decoration-none text-white">
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
                            By <a href="/buku?author={{ $book->user->username }}" class="text-decoration-none"> {{ $book->user->name }} </a> 
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
    @else
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <b>No Books Found.</b>
            </div>
        </div>
    </div>        
    @endif
    
@endsection
