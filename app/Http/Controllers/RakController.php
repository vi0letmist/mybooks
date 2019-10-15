<?php

namespace App\Http\Controllers;

use App\Rak;
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
        return view('rak.index');
    }

    /**
     * Show the form for creating a new user
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('rak.create');
    }

    /**
     * Store a newly created user in storage
     *
     * @param  \App\Http\Requests\RakRequest  $request
     * @param  \App\Rak  $model
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(RakRequest $request, Rak $model)
    {
        $model->create($request->all());

        return redirect()->route('rak.index')->withStatus(__('Books successfully created.'));
    }

    /**
     * Show the form for editing the specified user
     *
     * @param  \App\User  $user
     * @return \Illuminate\View\View
     */
    public function edit(Rak $rak)
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
    public function destroy(Rak $rak)
    {
        $rak->delete();

        return redirect()->route('rak.index')->withStatus(__('Rak successfully deleted.'));
    }
}
