<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view("auth.login");
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);
    }

    public function register()
    {
        return view('auth.register');
    }

    public function createAccount(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:App\Models\User,email',
            'password' => 'required|min:8|confirmed',
        ]);

        $siswa = new User();
        $siswa->fill($request->all());
        $siswa->jenis_kelamin = "";
        $siswa->agama = "";
        $siswa->tempat_lahir = "";
        $siswa->tanggal_lahir = Carbon::parse("1990-01-01");
        $siswa->rata_rata_UN = 0;
        $siswa->gaji_orang_tua_pertahun = 0;
        $siswa->asal_sekolah = "";
        $siswa->password = Hash::make($request->password);
        $siswa->save();

        // if (auth()->attempt(['email' => $siswa->email, 'password' => $request->password])) {
        //     return redirect('dashboard');
        // } else {
        //     return redirect()->back();
        // }
    }
}
