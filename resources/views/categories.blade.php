@extends('layouts.main')

@section('container')
    <h1>Halaman {{ $title }}</h1>
    
    <div class="container my-5">
        <div class="row justify-content-center">
            @foreach ($categories as $category)
            <div class="col-md-4">
                <a href="/categories/{{ $category->slug }}" class="text-decoration-none text-dark">
                <div class="card text-bg-dark">
                    <img src="..." class="card-img" alt="">
                    <div class="card-img-overlay d-flex align-items-center p-0">
                      <h5 class="card-title text-center flex-fill p-4 fs-3">{{ $category->name }}</h5>
                    </div>
                </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
@endsection