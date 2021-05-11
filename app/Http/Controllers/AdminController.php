<?php

namespace App\Http\Controllers;

use App\Models\DataSiswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\Translation\Exception\NotFoundResourceException;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->filled('search')) {
            $data_siswa = User::where('role', 'ADMIN')->where('name', 'LIKE', '%' . $request->search . '%')->get();
        } else {
            $data_siswa = User::where('role', 'ADMIN')->get();
        }
        $user = auth()->user();
        return view('admin.dataAdmin.index', ['data_admin' => $data_siswa, 'user' => $user]);
    }

    public function create()
    {
        $user = auth()->user();
        return view("admin.dataAdmin.add", ['user' => $user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'email|required',
            'name' => 'required',
            'password' => 'required|min:8',
        ]);
        $user = new User();
        $user->fill($request->only(['name', 'email']));
        $user->password = Hash::make($request->password);
        $user->role = "ADMIN";
        $user->save();
        return redirect()->route("data-admin.index")->with('sukses', 'Data administrator berhasil disimpan');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin = User::findOrFail($id);
        if ($admin->role !== 'ADMIN')
            throw new NotFoundResourceException();
        $user = auth()->user();
        return view('admin.dataAdmin.edit', ['admin' => $admin, 'user' => $user]);
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
        $user = User::findOrFail($id);
        if ($user->role !== 'ADMIN')
            throw new NotFoundResourceException();
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);
        $user->update($request->only(['name', 'email']));
        return redirect()->route('data-admin.index')->with('sukses', "Data siswa berhasil diupdate");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admin = User::findOrFail($id);
        if ($admin->role !== 'ADMIN')
            throw new NotFoundResourceException();
        if ($admin->id === auth()->user()->id)
            throw new NotFoundResourceException();
        $admin->delete();
        return redirect()->route("data-admin.index")->with('sukses', "Data admin berhasil dihapus dari sistem");
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
