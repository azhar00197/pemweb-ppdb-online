<?php

namespace App\Http\Controllers;

use App\Models\DataSiswa;
use App\Models\User;
use Illuminate\Http\Request;

class DataSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->filled('search')) {
            $data_siswa = DataSiswa::where('nama_siswa', 'LIKE', '%' . $request->search . '%')->get();
        } else {
            $data_siswa = DataSiswa::all();
        }
        $user = auth()->user();
        return view('admin.dataSiswa.index', ['data_siswa' => $data_siswa, 'user' => $user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DataSiswa::create($request->all());
        return redirect()->back()->with('sukses', 'Data siswa berhasil disimpan');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswa = DataSiswa::findOrFail($id);
        return view('admin.dataSiswa.edit', ['siswa' => $siswa]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $siswa = DataSiswa::findOrFail($id);
        $siswa->update($request->all());
        return redirect()->route('data-siswa.index')->with('sukses', "Data siswa berhasil diupdate");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = DataSiswa::findOrFail($id);
        $siswa->delete();
        return redirect()->back()->with('sukses', "Data siswa berhasil dihapus dari sistem");
    }

    public function editDariSiswa()
    {
        $user = User::findOrFail(auth()->user()->id);
        $siswa = $user->data_siswa;
        return view('dataSiswa.edit', ['siswa' => $siswa, 'user' => $user]);
    }

    public function updateDariSiswa(Request $request)
    {
        $user = User::findOrFail(auth()->user()->id);
        $request->validate([
            'nama_siswa' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'rata_rata_UN' => 'required|numeric',
            'gaji_orang_tua_pertahun' => 'required|numeric',
        ]);

        $siswa = $user->data_siswa;

        $user->name = $request->nama_siswa;
        $user->save();

        $siswa->fill($request->all());
        $siswa->save();

        return redirect('/foto-siswa');
    }
}
