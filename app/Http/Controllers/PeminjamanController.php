<?php

namespace App\Http\Controllers;

use App\Peminjaman;
use App\Http\Requests\PeminjamanRequest;
use Illuminate\Support\Facades\Hash;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Peminjaman  $model
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('peminjaman.index');
    }

    /**
     * Show the form for creating a new user
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('peminjaman.create');
    }

    /**
     * Store a newly created user in storage
     *
     * @param  \App\Http\Requests\PeminjamanRequest  $request
     * @param  \App\Peminjaman  $model
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(PeminjamanRequest $request, Peminjaman $model)
    {
        $model->create($request->merge(['password' => Hash::make($request->get('password'))])->all());

        return redirect()->route('peminjaman.index')->withStatus(__('Peminjaman successfully created.'));
    }

    /**
     * Show the form for editing the specified user
     *
     * @param  \App\Peminjaman  $peminjaman
     * @return \Illuminate\View\View
     */
    public function edit(Peminjaman $peminjaman)
    {
        return view('peminjaman.edit', compact('peminjaman'));
    }

    /**
     * Update the specified user in storage
     *
     * @param  \App\Http\Requests\PeminjamanRequest  $request
     * @param  \App\Peminjaman  $user
     * @return \Illuminate\Http\RedirectResponse
     */
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

    /**
     * Remove the specified user from storage
     *
     * @param  \App\Peminjaman  $peminjaman
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Peminjaman $peminjaman)
    {
        $peminjaman->delete();

        return redirect()->route('peminjaman.index')->withStatus(__('Peminjaman successfully deleted.'));
    }
}
