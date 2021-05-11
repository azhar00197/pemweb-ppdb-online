<?php

namespace App\Http\Controllers;

use App\Models\DataSiswa;
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

        $loggedIn = auth()->guard('web')->attempt($request->only(['email', 'password']));
        if ($loggedIn) {
            return redirect("/data-siswa");
        } else
            return redirect()->back()->withErrors(['Username/Password salah']);
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

        $user = new User();
        $user->fill($request->all());
        $user->role = "SISWA";
        $user->password = Hash::make($request->password);
        $user->save();

        $siswa = new DataSiswa();
        $siswa->user_id = $user->id;
        $siswa->save();

        if (auth()->attempt(['email' => $user->email, 'password' => $request->password])) {
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
