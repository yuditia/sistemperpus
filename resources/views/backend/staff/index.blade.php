@extends('backend.dashboard.master')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Staffs Data</h1>
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
        <form action="/staffs" method="get">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="search" name="search" value="{{ request('search') }}">
            <button class="btn btn-dark" type="submit" >Search</button>
          </div>
        </form>
      </div>
    </div>
    <a href="/staffs/create"><button class="btn btn-dark mb-3"><span data-feather="user-plus"></span> Tambah</button></a>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr class="text-center">
              <th scope="col">#</th>
              <th scope="col">Username</th>
              <th scope="col">Password</th>
              <th scope="col">Name</th>
              <th scope="col">Mobile</th>
              <th scope="col">Address</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($staffs as $staff)
              <tr class="text-center">
                <td>{{ $loop->iteration }}</td>
                <td>{{ $staff->username }}</td>
                <td>{{ $staff->password }}</td>
                <td>{{ $staff->name }}</td>
                <td>{{ $staff->mobile }}</td>
                <td>{{ $staff->address }}</td>
                <td>
                    <a href="staffs/{{ $staff->id }}/edit" class="btn btn-warning" ><span data-feather="edit"></span></a>
                    <form action="staffs/{{ $staff->id }}" method="post" class="d-inline">
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
      {{ $staffs->links() }}
      </div>

    
@endsection