<?php

namespace App\Http\Controllers;

use App\Models\DataSiswa;
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
            'nama_lengkap' => 'required',
            'email' => 'required|email|unique:App\Models\DataSiswa,email',
            'password' => 'required|min:8|confirmed',
        ]);

        $siswa = new DataSiswa();
        $siswa->fill($request->all());
        $siswa->password = Hash::make($request->password);
        $siswa->save();

        if (auth()->attempt(['email' => $siswa->email, 'password' => $request->password])) {
            return redirect('/data-siswa');
        } else {
            return redirect()->back();
        }
    }

    public function loginAdmin()
    {
        return view("admin.login");
    }

    public function authenticateAdmin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required|min:8'
        ]);
        $loggedIn = auth()->guard("admin")->attempt($request->only(['username', 'password']));
        if ($loggedIn) {
            return redirect("/admin/data-siswa");
        }
        return redirect()->back()->withErrors(['Username/Password salah']);
    }
}
