<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Authenticatable;
// use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    // use HasFactory, Notifiable;

    protected $primaryKey = "id";
    protected $collection = "data_siswa";

    protected $dates = ['tanggal_lahir'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
        'password',
        'nama_siswa',
        'jenis_kelamin',
        'agama',
        'umur',
        'rata_rata_UN',
        'gaji_orang_tua_pertahun',
        'asal_sekolah'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
