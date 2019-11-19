<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PinjamBuku extends Model
{
    protected $table = 'pinjam_bukus';

    public function buku()
    {
        return $this->belongsTo('App\Buku');
    }

    public function peminjam()
    {
        return $this->belongsTo('App\Peminjam');
    }
}
