@extends('layouts.app')
@section('judul')
    Edit User
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-info text-center mt-5 mb-5">
                <h1 class="font-weight-lighter">[Edit User]</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <form action="{{ url('/users', $user->id) }}" method="post">
                            @csrf
                            {{ method_field('PUT') }}
                            <div class="form-group">
                                <label for="nama" class="font-weight-bold">Nama</label>
                                <input type="text" class="form-control" name="nama" value="{{ $user->nama }}">
                            </div>

                            <div class="form-group">
                                <label for="alamat" class="font-weight-bold">Alamat</label>
                                <input type="text" class="form-control" name="alamat" value="{{ $user->alamat }}">
                            </div>

                            <div class="form-group">
                                <label for="tanggalLahir" class="font-weight-bold">Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tanggalLahir" value="{{ $user->tanggalLahir }}">
                            </div>

                            <button type="submit" class="btn btn-success">Simpan</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection