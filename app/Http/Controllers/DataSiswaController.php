<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataSiswaController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $data_siswa = \App\Models\DataSiswa::where('nama_siswa', 'LIKE', '%' . $request->search . '%')->get();
        } else {
            $data_siswa = \App\Models\DataSiswa::all();
        }
        return view('dataSiswa.index', ['data_siswa' => $data_siswa]);
    }
    public function create(Request $request)
    {
        \App\Models\DataSiswa::create($request->all());
        return redirect('/data-siswa')->with('sukses', 'Data siswa berhasil disimpan');
    }
    public function edit($id)
    {
        $siswa = \App\Models\DataSiswa::find($id);
        return view('dataSiswa/edit', ['siswa' => $siswa]);
    }
    public function update(Request $request, $id)
    {
        $siswa = \App\Models\DataSiswa::find($id);
        $siswa->update($request->all());
        return redirect('/data-siswa')->with('sukses', "Data siswa berhasil diupdate");
    }
    public function delete($id)
    {
        $siswa = \App\Models\DataSiswa::find($id);
        $siswa->delete();
        return redirect('/data-siswa')->with('sukses', "Data siswa berhasil dihapus dari sistem");
    }
}
