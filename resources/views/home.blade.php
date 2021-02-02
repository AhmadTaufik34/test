@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                    <a href="/mahaiswa/tambah">Tambah Mahasiswa</a>
                    <br>
                    <table>
                        <tr>
                            <th>Nama</th>
                            <th>NIM</th>
                            <th>Jenis Kelamin</th>
                            <th>Jurusan</th>
                            <th>Aksi</th>
                        </tr>
                        @foreach($mahasiswa as $ms)
                        <tr>
                            <td>{{ $ms->nama}}</td>
                            <td>{{ $ms->nim}}</td>
                            <td>{{ $ms->jenis_keleamin}}</td>
                            <td>{{ $ms->jurusan}}</td>
                            <td>
                                <a href="/mahasiswa/edit/{{ $ms->id}}">Edit</a>
                                |
                                <a href="/mahasiswa/hapus/{{ $ms->id}}">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
