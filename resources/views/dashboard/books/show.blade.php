@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Detail Buku</h1>
    </div>
    <div>
        <article>
            <h5 class="mb-3">{{ $buku->judul }}</h5>
            <a href="/dashboard/buku" class="btn btn-success">
                <span data-feather="arrow-left"></span> Back to my post
            </a> 
            <a href="/dashboard/buku/edit" class="btn btn-warning">
                <span data-feather="edit"></span> Edit
            </a> 
            <a href="/dashboard/buku/destroy" class="btn btn-danger">
                <span data-feather="x-circle"></span> Delete
            </a>
            <h5 class="mt-3">{{ $buku->desc }}</h5>
        </article>
    </div>
@endsection
