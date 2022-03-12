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
        <form action="/perpus/staffs" method="get">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="search" name="search" value="{{ request('search') }}">
            <button class="btn btn-dark" type="submit" >Search</button>
          </div>
        </form>
      </div>
    </div>
    <a href="/perpus/staffs/create"><button class="btn btn-dark mb-3"><span data-feather="user-plus"></span> Tambah</button></a>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr class="text-center">
              <th scope="col">#</th>
              <th scope="col">Username</th>
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
                <td>{{ $staff->name }}</td>
                <td>{{ $staff->mobile }}</td>
                <td>{{ $staff->address }}</td>
                <td>
                    <a href="/perpus/staffs/{{ $staff->id }}/edit" class="btn btn-warning btn-sm" ><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7"></path>
                      <path d="M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                    </svg></a>
                    <form action="/perpus/staffs/{{ $staff->id }}" method="post" class="d-inline">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('are you sure?')"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <polyline points="3 6 5 6 21 6"></polyline>
                          <path d="M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2"></path>
                        </svg></button>
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