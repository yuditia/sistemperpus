<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Form Register</title>

    <link rel="stylesheet" href="/css/signin.css">

    

    <!-- Bootstrap core CSS -->
<link href="/assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-md-5 mt-3">
          @if (session()->has('success'))
          <div class="alert alert-success alert-dismissible   fade show" role="alert">
              {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-5 mt-5">
          <main class="form-signin">
            <h1 class="h3 mb-3 fw-normal">Form Registration</h1>
            <form action="{!! route('do-register') !!}" method="post">
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
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" name="email" required value="{{ old('email') }}">
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
              <div class="form-floating mb-1">
                <input type="password" class="form-control @error('confirm_password') is-invalid @enderror" id="password" placeholder="name@example.com" name="confirm_password" required >
                <label for="password">Confirm Password</label>
                @error('confirm_password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
              </div>
              <div class="form-floating mb-3" style="margin-top: 5 px">
                <label for="jenis" class="form-label"></label>
                    <select class="form-select @error('jenis_anggota_id') is-invalid @enderror" name="jenis_anggota_id" id="jenis">
                    @foreach ($jenis as $jenis)
                        @if (old('jenis_anggota_id') == $jenis->id)
                        <option value="{{ $jenis->id }}" selected>{{ $jenis->nama_jenis }}</option>
                    @else
                        <option value="{{ $jenis->id }}" >{{ $jenis->nama_jenis }}</option>
                    @endif         
                    @endforeach
                    </select>
                    @error('jenis_anggota_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
              </div>
              
              <button class="w-100 btn btn-lg btn-dark mb-2" type="submit">Register</button>
              <p>Sudah punya akun?<a href="/auth/login"> login</a></p>
              <p class="mt-5 mb-3 text-muted">&copy; shidragon</p>
            </form>
            
          </main>
        </div>
    </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
  </body>
</html>
