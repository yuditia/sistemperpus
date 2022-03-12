@extends('backend.dashboard.master')

@section('container')
<div class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data Pengembalian Buku</h1>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <main class="form-register">
                    <form action="/perpus/returns" method="post">
                        @csrf
                        
                        <label for="datepicker">Tanggal kembali</label>
                        <input id="datepicker2"  name="tkembali" class="mt-3 mb-3" required/>

                        <label for="denda">Denda: </label>
                        <input type="text" id="denda" name="denda" class="form-control">
                            
                        <label for="user" class="form-label">Peminjam</label>
                        <input class="form-control mb-3" name="user_id" list="userlist" id="user" placeholder="Type to search..." value="{{ old('user') }}">
                        <datalist id="userlist">
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}
                            @endforeach
                        
                        </datalist>

                        <label for="staff" class="form-label">Petugas</label>
                        <input class="form-control mb-3" name="staff_id" list="stafflist" id="staff" placeholder="Type to search..." value="{{ old('staff') }}">
                        <datalist id="stafflist">
                            @foreach ($staffs as $staff)
                                <option value="{{ $staff->id }}">{{ $staff->name }}
                            @endforeach
                        
                        </datalist>

                        <label for="book" class="form-label">Judul Buku</label>
                        <input class="form-control" name="book_id" list="booklist" id="book" placeholder="Type to search..." value="{{ old('book') }}">
                        <datalist id="booklist">
                            @foreach ($books as $book)
                                <option value="{{ $book->id }}">{{ $book->name }}
                            @endforeach
                        
                        </datalist>

                        <button class="w-100 btn btn-lg btn-dark mt-3" type="submit">Register</button>

                        
                        
                    </form>
                </main>
            </div>
        </div>
    </div>
    

    <script>
    $('#datepicker').datepicker({
        format: 'yyyy-mm-dd'
    });
    $('#datepicker2').datepicker({
        format: 'yyyy-mm-dd'
    });
    </script>  

@endsection