@extends('layouts.master')

@section('content')
            <h1>Edit Data Siswa</h1>
            @if(session('sukses'))
                <div class="alert alert-success" role="alert">
                    {{session('sukses')}}
                </div>
            @endif
            <div class="row">
            <div class="col-ig-12">
                <form action="/data-siswa/{{$siswa->id}}/update" method="POST">
                    {{csrf_field()}}
                    <div class="form-grup">
                        <label for="exampleInputEmail1">Nama Siswa</label>
                        <input name="nama_siswa" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan nama" values="{{$siswa->nama_siswa}}">
                    </div>
                    <div class="form-grup">
                        <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                            <option value="L" @if($siswa->jenis_kelamin == 'L') selected @endif>Laki-laki</option>
                            <option value="P" @if($siswa->jenis_kelamin == 'P') selected @endif>Perempuan</option>
                        </select>
                    </div>
                    <div class="form-grup"">
                        <label for="exampleInputEmail1">Agama</label>
                        <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama" values="{{$siswa->agama}}">
                    </div>
                    <div class="form-grup">
                        <label for="exampleInputEmail1">Umur</label>
                        <input name="umur" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan umur" values="{{$siswa->umur}}">
                    </div>
                    <div class="form-grup">
                        <label for="exampleInputEmail1">Rata-Rata UN</label>
                        <input name="rata_rata_UN" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nilai rata-rata UN" values="{{$siswa->rata_rata_UN}}">
                    </div>
                    <div class="form-grup">
                        <label for="exampleInputEmail1">Gaji Orang Tua per Tahun</label>
                        <input name="gaji_orang_tua_pertahun" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="contoh format : 1.000/tahun" values="{{$siswa->gaji_orang_tua_pertahun}}">
                    </div>
                    <div class="form-grup">
                        <label for="exampleInputEmail1">Asal Sekolah</label>
                        <input name="asal_sekolah" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan asal sekolah" values="{{$siswa->asal_sekolah}}">
                    </div>
                    <button type="submit" class="btn btn-warning">Update</button>
                </form>
                </div>
            </div>
@endsection