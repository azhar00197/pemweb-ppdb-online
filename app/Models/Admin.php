<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Admin extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'admin';

    protected $fillable = [
        'username', 'nama', 'password'
    ];
}
