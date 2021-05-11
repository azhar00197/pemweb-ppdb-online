@extends('admin.layouts.dashboard')

@section('title')
    Edit Siswa
@endsection

@section('content')
    <div class="p-3">
        <h3>Edit Data Siswa</h3>
        @if(session('sukses'))
            <div class="alert alert-success" role="alert">
                {{session('sukses')}}
            </div>
        @endif
        <div class="row">
        <div class="col">
            <form action="{{route("data-admin.update", $admin->id)}}" method="POST">
                @csrf
                @method("PUT")
                <div class="form-grup mb-3">
                    <label for="name">Nama</label>
                    <input name="name" type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Masukkan nama" value="{{$admin->name}}">
                </div>
                <div class="form-grup mb-3">
                    <label for="email">Email</label>
                    <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Masukkan asal sekolah" value="{{$admin->email}}">
                </div>
                <div style="text-align: right">
                    <a href="{{route("data-admin.index")}}" class="btn btn-secondary mr-2">Batal</a>
                    <button type="submit" class="btn btn-warning">Update</button>
                </div>
            </form>
            </div>
        </div>
    </div>
@endsection