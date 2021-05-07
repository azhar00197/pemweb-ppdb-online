<?php

namespace App\Http\Controllers;

use App\Models\DataSiswa;
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
        if ($request->has('search')) {
            $data_siswa = DataSiswa::where('nama_siswa', 'LIKE', '%' . $request->search . '%')->get();
        } else {
            $data_siswa = DataSiswa::all();
        }
        return view('dataSiswa.index', ['data_siswa' => $data_siswa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        DataSiswa::create($request->all());
        return redirect('/data-siswa')->with('sukses', 'Data siswa berhasil disimpan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswa = DataSiswa::find($id);
        return view('dataSiswa/edit', ['siswa' => $siswa]);
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
        $siswa = DataSiswa::find($id);
        $siswa->update($request->all());
        return redirect('/data-siswa')->with('sukses', "Data siswa berhasil diupdate");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = \App\Models\DataSiswa::find($id);
        $siswa->delete();
        return redirect('/data-siswa')->with('sukses', "Data siswa berhasil dihapus dari sistem");
    }
}
