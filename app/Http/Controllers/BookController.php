<?php

namespace App\Http\Controllers;

use App\Rak;
use App\Buku;
use App\PinjamBuku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class BookController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Rak  $model
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $rak = Rak::where('user_id', Auth::user()->id)->first();
        $data = [
            'rak' => Rak::where('user_id', Auth::user()->id)->get(),
            'active' => $rak,
            'buku' => Buku::where('rak_id', $rak->id)->get()
        ];
        return view('rak.index', $data);
    }

    public function search(Request $req)
    {
        $search = $req->search;
        // dd($buku);
        $data = [
            'rak' => Rak::where('user_id', Auth::user()->id)->get(),
            'active' => 'Result',
            'buku' => Buku::where('judul', 'LIKE', '%'.$search.'%')->get()
        ];

        // dd($data);

        return view('rak.index', $data);
    }

    public function rak($id)
    {
        $rak = Rak::where('id', $id)->first();
        if ($rak == null) {
            $rak = Rak::where('user_id', Auth::user()->id)->first();
        }
        $data = [
            'rak' => Rak::where('user_id', Auth::user()->id)->get(),
            'active' => $rak,
            'buku' => Buku::where('rak_id', $rak->id)->get()
        ];
        return view('rak.index', $data);
    }

    /**
     * Show the form for creating a new user
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $data = [
            'rak' => Rak::where('user_id', Auth::user()->id)->get()
        ];
        return view('rak.create', $data);
    }

    public function show($id)
    {

        $buku = Buku::find($id);
        $rak = Rak::where('id', $buku->rak_id)->first();
        if($rak == null) {
            $rak= '-';
        } else {
            $rak = $rak->nama;
        }
        // dd($buku);
        return view('rak.show', compact('rak', 'buku'));
    }

    /**
     * Store a newly created user in storage
     *
     * @param  \App\Http\Requests\RakRequest  $request
     * @param  \App\Rak  $model
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $buku = new Buku();
        $buku->judul = $request->title;
        $buku->penulis = $request->author;
        $buku->deskripsi = $request->deskripsi;
        if ($request->gambar != null) {
            $cover = Str::random(30) . Auth::user()->id . '.' . $request->file('gambar')->getClientOriginalExtension();
            $buku->sampul = $cover;
        } else {
            $buku->sampul = 'default.jpg';
        }
        $buku->penerbit = $request->penerbit;
        $buku->tahun_terbit = $request->tahunTerbit;
        $buku->rak_id = $request->rak;
        $buku->user_id = Auth::user()->id;
        $buku->save();

        if ($request->gambar != null) {
            $target = base_path('public/images');
            $request->file('gambar')->move($target, $cover);
        }

        return redirect()->route('rak.index')->withStatus(__('Books successfully added.'));
    }

    /**
     * Show the form for editing the specified user
     *
     * @param  \App\User  $user
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $data = [
            'book' => Buku::where('id', $id)->first()
        ];
        return view('rak.edit', $data);
    }

    /**
     * Update the specified user in storage
     *
     * @param  \App\Http\Requests\RakRequest  $request
     * @param  \App\Rak  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(RakRequest $request, rak  $rak)
    {
        // $hasPassword = $request->get('password');
        // $user->update(
        //     $request->merge([
        //         'password' => Hash::make($request->get('password'))
        //         ])->except([$hasPassword ? '' : 'password'])
        //     );

        // return redirect()->route('user.index')->withStatus(__('User successfully updated.'));
    }

    /**
     * Remove the specified user from storage
     *
     * @param  \App\Rak  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        PinjamBuku::where('buku_id', $id)->delete();
        Buku::where('id', $id)->delete();

        return redirect()->route('rak.index')->withStatus(__('Book successfully deleted.'));
    }
}
