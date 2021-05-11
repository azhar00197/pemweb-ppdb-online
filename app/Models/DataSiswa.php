<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSiswa extends Model
{
    use HasFactory;
    protected $table = 'data_siswa';
    protected $fillable = ['nama_siswa', 'jenis_kelamin', 'agama', 'umur', 'rata_rata_UN', 'gaji_orang_tua_pertahun', 'asal_sekolah'];
}
