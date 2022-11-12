@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Books</h1>
    </div>
    <div>
        <div class="table-responsive col-lg-8">
            <a href="/dashboard/buku/create" class="btn btn-primary mb-3">Create New</a>
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $book->judul }}</td>
                            <td>{{ $book->category->name }}</td>
                            <td>
                                <a href="/dashboard/buku/{{ $book->slug }}" class="badge bg-info">
                                    <span data-feather="eye"></span>
                                </a> 
                                <a href="" class="badge bg-warning">
                                    <span data-feather="edit"></span>
                                </a>
                                <a href="" class="badge bg-danger">
                                    <span data-feather="trash"></span>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
