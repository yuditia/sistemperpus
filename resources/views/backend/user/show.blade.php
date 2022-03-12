@extends('backend.dashboard.master')

@section('container')
<div class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">View Users Data</h1>
    </div> 
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <main class="form-register mb-3">
                    <form action="/perpus/users" method="post">
                        @csrf
                      <div class="form-floating">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="name" name="name" required autofocus value="{{ $user->name }}">
                        <label for="name">Name</label>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                            
                      </div>
                      <div class="form-floating">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" name="email" required value="{{ $user->email }}">
                        <label for="email">Email</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                      </div>
                      <div class="form-floating">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="name@example.com" name="password" required value="{{ $user->password }}">
                        <label for="password">Password</label>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                      </div>
                      <div class="form-floating">
                        <input type="text" class="form-control @error('jenis_anggota_id') is-invalid @enderror" id="jenis_anggota_id" placeholder="name@example.com" name="jenis_anggota_id" required value="{{ $user->jenis_anggota->nama_jenis }}">
                        <label for="password">Jenis Anggota</label>
                        @error('jenis_anggota_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                      </div>
                      
                      
                        <a href="/perpus/users"><button class="w-100 btn btn-lg btn-dark mt-3" type="button" >Back</button></a>
                      </div>
                      
                      
                      
                      
                    </form>
                  </main>
            </div>
        </div>
    </div>
@endsection