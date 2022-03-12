@extends('backend.dashboard.master')

@section('container')
<div class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create Books Data</h1>
    </div> 

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <main class="form-register mb-3">
                    <form action="/perpus/books" method="post" enctype="multipart/form-data">
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
                        <div class="mb-3 mt-3">
                            <input class="form-control @error('image') is-invalid @enderror" type="file" id="formFile" name="image" >
                          
                          @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>
                      </div>
                      <div class="form-floating mb-2">
                        <input type="text" class="form-control @error('isbn') is-invalid @enderror" id="isbn" placeholder="name@example.com" name="isbn" required value="{{ old('isbn') }}">
                        <label for="isbn">ISBN</label>
                        @error('isbn')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                      </div>
                      <div class="form-floating mb-2">
                        <input type="text" class="form-control @error('author') is-invalid @enderror" id="author" placeholder="name@example.com" name="author" required value="{{ old('author') }}">
                        <label for="author">Author</label>
                        @error('author')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                      </div>
                      <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('publisher') is-invalid @enderror" id="publisher" placeholder="name@example.com" name="publisher" required value="{{ old('publisher') }}">
                        <label for="publisher">Publisher</label>
                        @error('publisher')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                      </div>
                      <label for="jbuku fw-normal">Jenis Buku</label>
                        <div class="form-floating mb-3">
                                <select class="form-select mt-2 @error('jbuku_id') is-invalid @enderror" name="jbuku_id" id="jbuku" aria-label="Jenis Buku">
                                  @foreach ($jbukus as $jbuku)
                                  @if (old('jbuku_id') == $jbuku->id)
                                  <option value="{{ $jbuku->id }}" selected>{{ $jbuku->jenis }}</option>
                                  @else
                                  <option value="{{ $jbuku->id }}" >{{ $jbuku->jenis }}</option>
                                  @endif
                                  @endforeach
                                </select>
                                @error('jbuku_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                        </div>
                        <label for="rbuku" class="form-label">Nama Rak</label>
                        <div class="form-floating mb-3">
                                <select class="form-select @error('rbuku_id') is-invalid @enderror" name="rbuku_id" id="rbuku">
                                  @foreach ($rbukus as $rbuku)
                                  @if (old('rbuku_id') == $rbuku->id)
                                  <option value="{{ $rbuku->id }}" selected>{{ $rbuku->nama }}</option>
                                  @else
                                  <option value="{{ $rbuku->id }}" >{{ $rbuku->nama }}</option>
                                  @endif
                                  @endforeach
                                </select>
                                @error('rbuku_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                        </div>
                        <label for="rbuku" class="form-label">Lokasi Rak</label>
                        <div class="form-floating">
                                <select class="form-select @error('rbuku_id') is-invalid @enderror" name="rbuku_id" id="rbuku">
                                  @foreach ($rbukus as $rbuku)
                                  @if (old('rbuku_id') == $rbuku->id)
                                  <option value="{{ $rbuku->id }}" selected>{{ $rbuku->lokasi }}</option>
                                  @else
                                  <option value="{{ $rbuku->id }}" >{{ $rbuku->lokasi }}</option>
                                  @endif
                                  @endforeach
                                </select>
                                @error('rbuku_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                        </div>
                        
                      
                        <button class="w-100 btn btn-lg btn-dark mt-3" type="submit">Register</button>
                      </div>
                    </form>
                  </main>
            </div>
        </div>
    </div>

@endsection