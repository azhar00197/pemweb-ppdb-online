@extends('admin.layouts.dashboard')

@section('title')
    Tambah Siswa
@endsection

@section('content')
    <div class="p-3">
        <h3>Tambah Data Siswa</h3>
        @if(session('sukses'))
            <div class="alert alert-success" role="alert">
                {{session('sukses')}}
            </div>
        @endif
        <div class="row">
        <div class="col">
            <form action="{{route("data-siswa.store")}}" method="POST">
                @csrf
                <div class="form-grup mb-3">
                    <label for="name">Nama Siswa</label>
                    <input name="name" type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Masukkan nama">
                </div>
                <div class="form-grup mb-3">
                    <label for="email">Email</label>
                    <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Masukkan email">
                </div>
                <div class="form-grup mb-3">
                    <label for="jenis_kelamin">Pilih Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                        <option value="LAKI-LAKI">Laki-laki</option>
                        <option value="PEREMPUAN">Perempuan</option>
                    </select>
                </div>
                <div class="form-grup mb-3"">
                    <label for="agama">Agama</label>
                    <input name="agama" type="text" class="form-control" id="agama" aria-describedby="emailHelp" placeholder="Agama">
                </div>
                <div class="form-grup mb-3">
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <input name="tempat_lahir" type="text" class="form-control" id="tempat_lahir" aria-describedby="emailHelp" placeholder="Masukkan tempat lahir">
                </div>
                <div class="form-grup mb-3">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input name="tanggal_lahir" type="date" class="form-control" id="tanggal_lahir" aria-describedby="emailHelp" placeholder="Masukkan tanggal lahir">
                </div>
                <div class="form-grup mb-3">
                    <label for="rata_rata_UN">Rata-Rata UN</label>
                    <input name="rata_rata_UN" type="number" step="any" class="form-control" id="rata_rata_UN" aria-describedby="emailHelp" placeholder="Nilai rata-rata UN">
                </div>
                <div class="form-grup mb-3">
                    <label for="gaji_orang_tua_pertahun">Gaji Orang Tua per Tahun</label>
                    <input name="gaji_orang_tua_pertahun" type="number" class="form-control" id="gaji_orang_tua_pertahun" aria-describedby="emailHelp" placeholder="Masukkan gaji orang tua per tahun">
                </div>
                <div class="form-grup mb-3">
                    <label for="asal_sekolah">Asal Sekolah</label>
                    <input name="asal_sekolah" type="text" class="form-control" id="asal_sekolah" aria-describedby="emailHelp" placeholder="Masukkan asal sekolah">
                </div>
                <div class="form-grup mb-3">
                    <label for="password">Password</label>
                    <input name="password" type="password" minlength="8" class="form-control" id="password" aria-describedby="emailHelp" placeholder="Masukkan password">
                </div>
                <div style="text-align: right">
                    <a href="{{route("data-siswa.index")}}" class="btn btn-secondary mr-2">Batal</a>
                    <button type="submit" class="btn btn-success">Tambah</button>
                </div>
            </form>
            </div>
        </div>
    </div>
@endsection