<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjam extends Model
{
    protected $table = 'peminjams';

    protected $fillable = [
        'nama',
        'alamat',
        'no_hp'
    ];
}
