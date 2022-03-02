@extends('backend.dashboard.master')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Books Data</h1>
    </div> 
    
    <div class="col-md-5">
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    </div>
    <div class="row">
      <div class="col-md-4">
        <form action="/books" method="get">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="search" name="search" value="{{ request('search') }}">
            <button class="btn btn-dark" type="submit" >Search</button>
          </div>
        </form>
      </div>
    </div>
    <a href="/books/create"><button class="btn btn-dark mb-3"><span data-feather="user-plus"></span> Tambah</button></a>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr class="text-center align-baseline">
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Image</th>
              <th scope="col">ISBN</th>
              <th scope="col">Author</th>
              <th scope="col">Publisher</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
              
              @foreach ($books as $book)
              <tr class="text-center align-baseline">
                <td>{{ $loop->iteration }}</td>
                <td>{{ $book->name }}</td>

                @if (file_exists(public_path("/storage/$book->image")))
                    <td><img src="{{ asset("/storage/" . $book->image) }}" alt="{{ $book->name }}" width="90" height="110"></td>
                @else
                    <td><img src="{{ $book->image }}" alt="{{ $book->name }}" width="90" height="110"></td>
                @endif
                
                <td>{{ $book->isbn }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->publisher }}</td>
                <td>
                  <a href="books/{{ $book->id }}" class="btn btn-info" ><span data-feather="eye"></span></a>
                    
                    <a href="books/{{ $book->id }}/edit" class="btn btn-warning" ><span data-feather="edit"></span></a>
                    <form action="books/{{ $book->id }}" method="post" class="d-inline">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger" onclick="return confirm('are you sure?')"><span data-feather="trash"></span></button>
                    </form>
                </td>
              </tr>
              @endforeach
          </tbody>
        </table>
      </div>
     
 

      <div class="d-flex justify-content-end">
      {{ $books->links() }}
      </div>

      
@endsection