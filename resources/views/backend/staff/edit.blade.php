@extends('backend.dashboard.master')

@section('container')
    <div class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Form Edit Staff</h1>
    </div> 

    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <main class="form-register mb-3">
                    <form action="/staffs/{{ $staff->id }}" method="post">
                        @csrf
                        @method('PUT')
                      <div class="form-floating">
                        <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="username" name="username" required value="{{ $staff->username }}">
                        <label for="username">username</label>
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                            
                      </div>
                      <div class="form-floating">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="name@example.com" name="password" required value="{{ $staff->password }}">
                        <label for="password">Password</label>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                      </div>
                      <div class="form-floating">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="name" name="name" required value="{{ $staff->name }}">
                        <label for="name">name</label>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                      </div>
                      <div class="form-floating">
                        <input type="text" class="form-control @error('mobile') is-invalid @enderror" id="mobile" placeholder="mobile" name="mobile" required value="{{ $staff->mobile }}">
                        <label for="mobile">mobile</label>
                        @error('mobile')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                      </div>
                      <div class="form-floating">
                        <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" placeholder="address" name="address" required value="{{ $staff->address }}">
                        <label for="address">address</label>
                        @error('address')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                      </div>
                  
                      <button class="w-100 btn btn-lg btn-dark mt-3" type="submit">Ubah</button>
                      
                    </form>
                  </main>
            </div>
        </div>
    </div>

@endsection