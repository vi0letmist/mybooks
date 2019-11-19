<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peminjam;

class PeminjamController extends Controller
{
    public function index()
    {
        return view('peminjam.create');
    }

    public function store(Request $request)
    {
        $peminjam = new Peminjam;
        $peminjam->nama = $request->nama;
        $peminjam->alamat = $request->alamat;
        $peminjam->no_hp = $request->noHP;
        $peminjam->status = '0';

        $peminjam->save();

        return redirect()->route('peminjaman.create')->withStatus(__('Peminjam berhasil ditambahkan.'));
    }
}
