@extends('backend.dashboard.master')

@section('container')
<div class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Data Pengembalian Buku</h1>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <main class="form-register">
                    <form action="/perpus/returns/{{ $returns->id }}" method="post">
                        @csrf
                        @method('PUT')
                        
                        <label for="datepicker">Tanggal Kembali</label>
                        <input id="datepicker"  name="tkembali" class="d-flex mt-3 mb-2" required value="{{ $returns->tkembali }}"/>
                        
                        <label for="denda">Denda</label>
                        <input id="denda"  name="denda" class="form-control mt-3 mb-3" required value="{{ $returns->denda }}"/>

                        <label for="user" class="form-label">Peminjam</label>
                        <select class="form-control mb-5" name="user_id" id="user" placeholder="Pilih User">
                            @foreach ($users as $user)
                            <option {{ $user->id === old('user_id', @$returns->user_id) ? 'selected' : '' }} value="{{ $user->id }}">
                                {{ $user->name }}
                            </option>
                            @endforeach
                        </select>

                        <label for="user" class="form-label">Staff</label>
                        <select class="form-control mb-5" name="staff_id" id="staff" placeholder="Pilih User">
                            @foreach ($staffs as $staff)
                            <option {{ $staff->id === old('staff_id', @$returns->staff_id) ? 'selected' : '' }} value="{{ $staff->id }}">
                                {{ $staff->name }}
                            </option>
                            @endforeach
                        </select>

                        <label for="user" class="form-label">Book</label>
                        <select class="form-select mb-5" name="book_id" id="book" placeholder="Pilih User">
                            @foreach ($books as $book)
                            <option {{ $book->id === old('book_id', @$returns->book_id) ? 'selected' : '' }} value="{{ $book->id }}">
                                {{ $book->name }}
                            </option>
                            @endforeach
                        </select>

                        <button class="w-100 btn btn-lg btn-dark mt-3" type="submit">Update</button>

                        
                        
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
    <script>
        $('#user').select2();
        $('#staff').select2();
        $('#book').select2();
    </script>
    
@endsection