<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class DataSiswa extends Authenticatable
{
    use HasFactory;
    protected $table = 'data_siswa';
    protected $fillable = [
        'email',
        'nama_lengkap',
        'jenis_kelamin',
        'agama',
        'tempat_lahir',
        'tanggal_lahir',
        'rata_rata_UN',
        'gaji_orang_tua_pertahun',
        'asal_sekolah',
    ];
}
