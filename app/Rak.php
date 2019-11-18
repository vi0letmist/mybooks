<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rak extends Model
{
    protected $table = 'raks';

    protected $fillable = [
        'nama',
        'user_id'
    ];
}
