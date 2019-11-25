<?php

namespace App\Http\Controllers;

use App\Rak;
use App\Buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RakController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Rak  $model
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $data = [
            'rak' => Rak::where('user_id', Auth::user()->id)->get(),
            'active' => 'All',
            'buku' => Buku::where('user_id', Auth::user()->id)->get()
        ];

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
        return view('rak.createRak');
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
        $rak = new Rak();
        $rak->nama = $request->name;
        $rak->user_id = Auth::user()->id;
        // $rak->judul = $request->title;
        // $rak->penulis = $request->author;
        // $rak->deskripsi = $request->deskripsi;
        // $rak->tahun_terbit = $request->tahunTerbit;
        // $rak->penerbit = $request->penerbit;
        // $rak->sampul = $request->sampul;
        // $rak->rak_id = $request->rak;

        $rak->save();

        return redirect()->route('rak.index')->withStatus(__('Shelf successfully created.'));
    }

    /**
     * Show the form for editing the specified user
     *
     * @param  \App\User  $user
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        return view('rak.edit', compact('rak'));
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
        Rak::where('id', $id)->delete();

        return redirect()->route('rak.index')->withStatus(__('Rak successfully deleted.'));
    }
}
