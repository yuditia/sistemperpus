@extends('backend.dashboard.master')

@section('container')
    <div class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">View Books Data</h1>
    </div> 

    <div class="container-fluid">
        <div class="row ">
            <div class="col-lg-4 mt-3">
            @if (file_exists(public_path("/storage/$book->image")))
                <td><img src="{{ asset("/storage/" . $book->image) }}" alt="{{ $book->name }}" width="300" height="450"></td>
            @else
                <td><img src="{{ $book->image }}" alt="{{ $book->name }}" width="300" height="450"></td>
            @endif
            </div>
            <div class="col mt-3">
                <ul class="list-group list-group-horizontal mb-1">
                    <li class="list-group-item col-md-2">Title</li>
                    <li class="list-group-item col">: {{ $book->name }}</li>
                </ul>
                <ul class="list-group list-group-horizontal mb-1">
                    <li class="list-group-item col-md-2">Author</li>
                    <li class="list-group-item col">: {{ $book->author }}</li>
                </ul>
                <ul class="list-group list-group-horizontal mb-1">
                    <li class="list-group-item col-md-2">Publisher</li>
                    <li class="list-group-item col">: {{ $book->publisher }}</li>
                </ul>
                <ul class="list-group list-group-horizontal mb-1">
                    <li class="list-group-item col-md-2">ISBN</li>
                    <li class="list-group-item col">: {{ $book->isbn }}</li>
                </ul>
                <ul class="list-group list-group-horizontal mb-1">
                    <li class="list-group-item col-md-2">Category</li>
                    <li class="list-group-item col">: {{ $book->jbuku->jenis }}</li>
                </ul>
                <ul class="list-group list-group-horizontal mb-1">
                    <li class="list-group-item col-md-2">Rak</li>
                    <li class="list-group-item col">: {{ $book->rbuku->nama }}</li>
                </ul>
                <ul class="list-group list-group-horizontal mb-1">
                    <li class="list-group-item col-md-2">Lokasi</li>
                    <li class="list-group-item col">: {{ $book->rbuku->lokasi }}</li>
                </ul> 
                <div class="d-grid gap-2 mt-3">
                    <a href="/books" type="button" class="btn btn-dark">Back</a>
                  </div>
            </div>
        </div>
    </div>
@endsection