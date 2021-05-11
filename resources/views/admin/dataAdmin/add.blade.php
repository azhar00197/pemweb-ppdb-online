@extends('admin.layouts.dashboard')

@section('title')
    Tambah Admin
@endsection

@section('content')
    <div class="p-3">
        <h3>Tambah Administrator</h3>
        @if(session('sukses'))
            <div class="alert alert-success" role="alert">
                {{session('sukses')}}
            </div>
        @endif
        <div class="row">
        <div class="col">
            <form action="{{route("data-admin.store")}}" method="POST">
                @csrf
                <div class="form-grup mb-3">
                    <label for="name">Nama</label>
                    <input name="name" type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Masukkan nama">
                </div>
                <div class="form-grup mb-3">
                    <label for="email">Email</label>
                    <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Masukkan email">
                </div>
                <div class="form-grup mb-3">
                    <label for="password">Password</label>
                    <input name="password" type="password" minlength="8" class="form-control" id="password" aria-describedby="emailHelp" placeholder="Masukkan password">
                </div>
                <div style="text-align: right">
                    <a href="{{route("data-admin.index")}}" class="btn btn-secondary mr-2">Batal</a>
                    <button type="submit" class="btn btn-success">Tambah</button>
                </div>
            </form>
            </div>
        </div>
    </div>
@endsection