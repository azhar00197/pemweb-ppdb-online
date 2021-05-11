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
            <form action="{{route("data-siswa.update", $siswa->id)}}" method="POST">
                @csrf
                @method("PUT")
                <div class="form-grup mb-3">
                    <label for="nama_siswa">Nama Siswa</label>
                    <input name="nama_siswa" type="text" class="form-control" id="nama_siswa" aria-describedby="emailHelp" placeholder="Masukkan nama" value="{{$siswa->name}}">
                </div>
                <div class="form-grup mb-3">
                    <label for="jenis_kelamin">Pilih Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                        <option value="LAKI-LAKI" @if($siswa->data_siswa->jenis_kelamin == 'LAKI-LAKI') selected @endif>Laki-laki</option>
                        <option value="PEREMPUAN" @if($siswa->data_siswa->jenis_kelamin == 'PEREMPUAN') selected @endif>Perempuan</option>
                    </select>
                </div>
                <div class="form-grup mb-3"">
                    <label for="agama">Agama</label>
                    <input name="agama" type="text" class="form-control" id="agama" aria-describedby="emailHelp" placeholder="Agama" value="{{$siswa->data_siswa->agama}}">
                </div>
                <div class="form-grup mb-3">
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <input name="tempat_lahir" type="text" class="form-control" id="tempat_lahir" aria-describedby="emailHelp" placeholder="Masukkan umur" value="{{$siswa->data_siswa->tempat_lahir}}">
                </div>
                <div class="form-grup mb-3">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input name="tanggal_lahir" type="date" class="form-control" id="tanggal_lahir" aria-describedby="emailHelp" placeholder="Masukkan umur" value="{{$siswa->data_siswa->tanggal_lahir}}">
                </div>
                <div class="form-grup mb-3">
                    <label for="rata_rata_UN">Rata-Rata UN</label>
                    <input name="rata_rata_UN" type="number" step="any" class="form-control" id="rata_rata_UN" aria-describedby="emailHelp" placeholder="Nilai rata-rata UN" value="{{$siswa->data_siswa->rata_rata_UN}}">
                </div>
                <div class="form-grup mb-3">
                    <label for="gaji_orang_tua_pertahun">Gaji Orang Tua per Tahun</label>
                    <input name="gaji_orang_tua_pertahun" type="number" class="form-control" id="gaji_orang_tua_pertahun" aria-describedby="emailHelp" placeholder="Masukkan gaji orang tua per tahun" value="{{$siswa->data_siswa->gaji_orang_tua_pertahun}}">
                </div>
                <div class="form-grup mb-3">
                    <label for="asal_sekolah">Asal Sekolah</label>
                    <input name="asal_sekolah" type="text" class="form-control" id="asal_sekolah" aria-describedby="emailHelp" placeholder="Masukkan asal sekolah" value="{{$siswa->data_siswa->asal_sekolah}}">
                </div>
                <div style="text-align: right">
                    <a href="{{route("data-siswa.index")}}" class="btn btn-secondary mr-2">Batal</a>
                    <button type="submit" class="btn btn-warning">Update</button>
                </div>
            </form>
            </div>
        </div>
    </div>
@endsection