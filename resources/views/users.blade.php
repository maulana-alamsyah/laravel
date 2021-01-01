@extends('layouts.app')
@section('judul')
   Users 
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center text-info mt-5 mb-5">
                <h1 class="font-weight-lighter">[Users]</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card border-0 shadow ">
                    <div class="card-body">
                        <table class="table table-hover">
                            <th scope="col" class="text-center">No</th>
                            <th class="text-center">Nama</th>
                            <th class="text-center">Alamat</th>
                            <th class="text-center">Tgl Lahir</th>
                            <th class="text-center" colspan="2">Aksi</th>
                            @forelse ($users as $index => $user)
                                <tr>
                                    <td> {{ $index +1 }}</td>
                                    <td><a href="{{ url('/users', $user->id) }}">{{ $user->nama }} </a></td>
                                    <td>{{ $user->alamat }}</td>
                                    <td>{{ $user->tanggalLahir }}</td>
                                    <td>
                                        <form action="{{ url('/users/edit', $user->id) }}" method="get">
                                            <button style="width: 75px" class="mr-0 btn btn-success">Edit</button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="/users/{{ $user->id }}" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                        
                                            <div>
                                                <button style="width: 75px" class="ml-0 btn btn-danger">Hapus</button>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                            asdf
                            @endforelse
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection