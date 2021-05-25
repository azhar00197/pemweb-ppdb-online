@extends('layouts.siswa')

@section('title')
    Data Siswa
@endsection

@section('content')
    <div class="p-8 max-w-5xl mx-auto">
        <h1 class="font-bold text-4xl">Foto Siswa</h1>
        @if(session('sukses'))
            <div class="alert alert-success" role="alert">
                {{session('sukses')}}
            </div>
        @endif
        @if ($errors->any())
            <div class="rounded-md bg-red-100 text-red-600 p-3 mb-6">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if($foto !== null)
        <img src="{{$foto->url}}" style="height: 200px;" />
        @endif
        <div class="flex flex-col mt-12">
            <div class="col-ig-12">
                <form action="/foto-siswa" enctype="multipart/form-data" method="POST">
                    @csrf
                    <input type="file" name="foto" accept="image/*">
                    <div class="flex justify-between mt-16">
                        <a href="data-siswa" type="submit" class="bg-gray-500 text-gray-100 px-6 py-2 rounded-md">&lt; Kembali</a>
                        <button type="submit" class="bg-green-600 hover:bg-green-800 px-8 py-2 rounded-md text-white">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection