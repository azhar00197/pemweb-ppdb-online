@extends('layouts.master')

@section('content')
            <h1>Hapus Data Siswa</h1>
            @if(session('sukses'))
                <div class="alert alert-success" role="alert">
                    {{session('sukses')}}
                </div>
            @endif
            <div class="row">
            <div class="col-ig-12">
                <form action="/data-siswa/{{$siswa->id}}" method="POST">
                    @csrf
                    @method("PUT")
                    <div class="form-grup">
                        <label for="exampleInputEmail1">Nama Siswa</label>
                        <input name="nama_siswa" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan nama" value="{{$siswa->nama_siswa}}">
                    </div>
                    <button type="submit" class="btn btn-warning">Submit</button>
                </form>
                </div>
            </div>
@endsection