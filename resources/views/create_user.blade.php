@extends('layouts.app')
@section('judul')
    Add User
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mb-5 mt-5">
                <h1 class="font-weight-lighter text-primary">[Tambah User]</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow border-0">
                    <div class="card-body">
                        <form action="{{ url('/users') }}" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="nama" class="font-weight-bold">Nama</label>
                                <input type="text" class="form-control" name="nama">
                            </div>

                            <div class="form-group">
                                <label for="alamat" class="font-weight-bold">alamat</label>
                                <input type="text" class="form-control" name="alamat">
                            </div>

                            <div class="form-group">
                                <label for="tanggalLahir" class="font-weight-bold">Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tanggalLahir">
                            </div>

                            <button class="btn btn-success shadow" type="submit">Simpan</button>
                            <button class="btn btn-danger shadow" type="reset">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection