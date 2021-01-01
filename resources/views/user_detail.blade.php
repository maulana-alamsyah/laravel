@extends('layouts.app')
@section('judul')
    User Detail
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center text-info mt-5 mb-5">
                <h1 class="font-weight-lighter">[User Details]</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow border-0">
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <td>id</td>
                                <td></td>
                                <td>{{ $user->id }}</td>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td></td>
                                <td>{{ $user->nama }}</td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td></td>
                                <td>{{ $user->alamat }}</td>
                            </tr>
                            <tr>
                                <td>Tanggal Lahir</td>
                                <td></td>
                                <td>{{ $user->tanggalLahir }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection