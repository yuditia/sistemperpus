@extends('backend.dashboard.master')

@section('container')
    <div class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Form Register User</h1>
    </div> 

    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <main class="form-register mb-3">
                    <form action="/perpus/users" method="post">
                        @csrf
                      <div class="form-floating">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="name" name="name" required autofocus value="{{ old('name') }}">
                        <label for="name">Name</label>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                            
                      </div>
                      <div class="form-floating">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" name="email" required >
                        <label for="email">Email</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                      </div>
                      <div class="form-floating">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="name@example.com" name="password" required >
                        <label for="password">Password</label>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                      </div>
                      <div class="form-floating">
                        
                                <label for="jenis" class="form-label"></label>
                                <select class="form-select @error('jenis_anggota_id') is-invalid @enderror" name="jenis_anggota_id" id="jenis">
                                  @foreach ($jenis_anggotas as $jenis)
                                  @if (old('jenis_anggota_id') == $jenis->id)
                                  <option value="{{ $jenis->id }}" selected>{{ $jenis->nama_jenis }}</option>
                                  @else
                                  <option value="{{ $jenis->id }}" >{{ $jenis->nama_jenis }}</option>
                                  @endif
                                    
                                  @endforeach
                                </select>
                      </div>
                        @error('jenis_anggota_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                      
                        <button class="w-100 btn btn-lg btn-dark mt-3" type="submit">Register</button>
                      </div>
                      
                      
                      
                      
                    </form>
                  </main>
            </div>
        </div>
    </div>

@endsection