@extends('layouts.master')

@section('content')
            @if(session('sukses'))
                <div class="alert alert-success" role="alert">
                    {{session('sukses')}}
                </div>
            @endif
            <div class="row">
                <div class="col-10">
                    <h3>PENERIMAAN PENDAFTARAN SISWA BARU SMAN 1 MALANG</h1>
                </div>
                <div class="col-2">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-sm float-right" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Tambah Data Siswa
                    </button>
                </div>
                <table class="table table-hover"> 
                <tr>
                    <th>NAMA SISWA</th>
                    <th>JENIS KELAMIN</th>
                    <th>AGAMA</th>
                    <th>UMUR</th>
                    <th>RATA-RATA UN</th>
                    <th>GAJI ORANG TUA PER TAHUN</th>
                    <th>ASAL SEKOLAH</th>
                    <th>ACTION</th>
                </tr>
                @foreach($data_siswa as $siswa)
                <tr>
                    <td>{{$siswa->nama_siswa}}</td>
                    <td>{{$siswa->jenis_kelamin}}</td>
                    <td>{{$siswa->agama}}</td>
                    <td>{{$siswa->umur}}</td>
                    <td>{{$siswa->rata_rata_UN}}</td>
                    <td>{{$siswa->gaji_orang_tua_pertahun}}</td>
                    <td>{{$siswa->asal_sekolah}}</td>
                    <td>
                        <a href="/data-siswa/{{$siswa->id}}/edit" class="btn btn-warning btn-sm">EDIT</a>
                        <form action="/data-siswa/{{$siswa->id}}" method="POST" onsubmit="return confirm('Apakah anda yakin ?')">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn btn-danger btn-sm">DELETE</button>
                        </form>
                    </td>
                </tr>
                 @endforeach
                </table>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Masukkan Data Siswa</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="/data-siswa" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Siswa</label>
                                <input name="nama_siswa" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan nama">
                            </div>
                            <div class="form-grup">
                                <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                                    <option value="L">Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Agama</label>
                                <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Umur</label>
                                <input name="umur" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan umur">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Rata-Rata UN</label>
                                <input name="rata_rata_UN" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nilai rata-rata UN">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Gaji Orang Tua per Tahun</label>
                                <input name="gaji_orang_tua_pertahun" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="contoh format : 1.000/tahun">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Asal Sekolah</label>
                                <input name="asal_sekolah" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan asal sekolah">
                            </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
@endsection