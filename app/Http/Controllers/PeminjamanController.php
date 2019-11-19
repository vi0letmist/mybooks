<?php

namespace App\Http\Controllers;

use App\PinjamBuku;
use App\Peminjam;
use App\Buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PeminjamanController extends Controller
{

    public function index()
    {
        $peminjaman = PinjamBuku::all();
        $i = 1;

        return view('peminjaman.index', compact('peminjaman', 'i'));
    }


    public function create()
    {
        $peminjam = Peminjam::all();
        $buku = Buku::all();
        return view('peminjaman.create', compact('peminjam', 'buku'));
    }

    public function store(Request $request)
    {
        // dd($request);
        $peminjaman = new PinjamBuku;

        $peminjaman->status = '1';
        $peminjaman->tgl_pinjam = $request->tanggalPinjam;
        $peminjaman->tgl_kembali = $request->tanggalKembali;
        $peminjaman->buku_id = $request->buku;
        $peminjaman->peminjam_id = $request->nama;

        $peminjaman->save();


        return redirect()->route('peminjaman.index')->withStatus(__('Peminjaman successfully created.'));
    }

    public function edit(Peminjaman $peminjaman)
    {
        return view('peminjaman.edit', compact('peminjaman'));
    }


    public function update(PeminjamanRequest $request, Peminjaman  $peminjaman)
    {
        $hasPassword = $request->get('password');
        $peminjaman->update(
            $request->merge([
                'password' => Hash::make($request->get('password'))
            ])->except([$hasPassword ? '' : 'password'])
        );

        return redirect()->route('peminjaman.index')->withStatus(__('Peminjaman successfully updated.'));
    }


    public function destroy($id)
    {
        PinjamBuku::where('id', $id)->delete();

        return redirect()->route('peminjaman.index')->withStatus(__('Peminjaman successfully deleted.'));
    }
}
