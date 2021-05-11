@extends('layouts.siswa')

@section('title')
    Data Siswa
@endsection

@section('content')
    <div class="p-8 max-w-5xl mx-auto">
        <h1 class="font-bold text-4xl">Data Siswa</h1>
        @if(session('sukses'))
            <div class="alert alert-success" role="alert">
                {{session('sukses')}}
            </div>
        @endif
        <div class="flex flex-col mt-12">
            <div class="col-ig-12">
                <form action="/data-siswa" method="POST">
                    @csrf
                    <div class="flex flex-col mb-4">
                        <label for="nama_siswa">Nama Siswa</label>
                        <input name="nama_siswa" type="text" class="border border-gray-700 border-opacity-50 px-2 py-1 rounded-sm focus:outline-none focus:border-blue-700" id="nama_siswa" aria-describedby="emailHelp" placeholder="Masukkan nama" value="{{$user->name}}" required>
                    </div>
                    <div class="flex flex-col mb-4">
                        <label for="jenis_kelamin">Pilih Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="border border-gray-700 border-opacity-50 px-2 py-1 rounded-sm focus:outline-none focus:border-blue-700" id="jenis_kelamin">
                            <option value="LAKI-LAKI" @if($siswa->jenis_kelamin == 'LAKI-LAKI') selected @endif>Laki-laki</option>
                            <option value="PEREMPUAN" @if($siswa->jenis_kelamin == 'PEREMPUAN') selected @endif>Perempuan</option>
                        </select>
                    </div>
                    <div class="flex flex-col mb-4">
                        <label for="agama">Agama</label>
                        <input name="agama" type="text" class="border border-gray-700 border-opacity-50 px-2 py-1 rounded-sm focus:outline-none focus:border-blue-700" id="agama" aria-describedby="emailHelp" placeholder="Agama" value="{{$siswa->agama}}" required>
                    </div>
                    <div class="flex flex-col mb-4">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input name="tempat_lahir" type="text" class="border border-gray-700 border-opacity-50 px-2 py-1 rounded-sm focus:outline-none focus:border-blue-700" id="tempat_lahir" aria-describedby="emailHelp" placeholder="Masukkan umur" value="{{$siswa->tempat_lahir}}" required>
                    </div>
                    <div class="flex flex-col mb-4">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input name="tanggal_lahir" type="date" class="border border-gray-700 border-opacity-50 px-2 py-1 rounded-sm focus:outline-none focus:border-blue-700" id="tanggal_lahir" aria-describedby="emailHelp" placeholder="Masukkan umur" value="{{$siswa->tanggal_lahir}}" required>
                    </div>
                    <div class="flex flex-col mb-4">
                        <label for="rata_rata_UN">Rata-Rata UN</label>
                        <input name="rata_rata_UN" type="number" step="any" class="border border-gray-700 border-opacity-50 px-2 py-1 rounded-sm focus:outline-none focus:border-blue-700" id="rata_rata_UN" aria-describedby="emailHelp" placeholder="Nilai rata-rata UN" value="{{$siswa->rata_rata_UN}}" required>
                    </div>
                    <div class="flex flex-col mb-4">
                        <label for="gaji_orang_tua_pertahun">Gaji Orang Tua per Tahun</label>
                        <input name="gaji_orang_tua_pertahun" type="number" class="border border-gray-700 border-opacity-50 px-2 py-1 rounded-sm focus:outline-none focus:border-blue-700" id="gaji_orang_tua_pertahun" aria-describedby="emailHelp" placeholder="contoh format : 1.000/tahun" value="{{$siswa->gaji_orang_tua_pertahun}}" required>
                    </div>
                    <div class="flex flex-col mb-4">
                        <label for="asal_sekolah">Asal Sekolah</label>
                        <input name="asal_sekolah" type="text" class="border border-gray-700 border-opacity-50 px-2 py-1 rounded-sm focus:outline-none focus:border-blue-700" id="asal_sekolah" aria-describedby="emailHelp" placeholder="Masukkan asal sekolah" value="{{$siswa->asal_sekolah}}" required>
                    </div>
                    <div class="flex justify-between mt-16">
                        <a href="#" type="submit" class="bg-gray-300 text-gray-100 px-6 py-2 rounded-md">&lt; Kembali</a>
                        <button type="submit" class="bg-green-600 hover:bg-green-800 px-8 py-2 rounded-md text-white">Lanjut &gt;</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection