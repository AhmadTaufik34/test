@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                   <form action="/mahasiwa/store" method="POST">
                        {{ csrf_field()}}
                        Nama <input type="text" name="nama" required/>
                        NIM <input type="number" name="nim" required>
                        Jenis Kelamin <input type="text" name="jenis_kelamin" required>
                        Jurusan <input type="text" name="jurusan" required>
                        <input type="submit" value="SIMPAN">
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
