<?php
// app/Http/Controllers/MongoController.php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;

class AdminController extends Controller
{
    public function login(Guard $auth_guard)
    {
        if ($auth_guard->validate()) {
            // get the current authenticated user
            $user = $auth_guard->user();
            // menampilkan seluruh data pada view
            $data_admin = \App\Admin::all();
            return view('admin.index')->with('data_admin', $data_admin);
        }
    }
}
