<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfilesController extends Controller
{
    //
    public function index(User $user)
    {
        //$user = User::findOrFail($user);

        return view('profiles/index', [
            'user' => $user
        ]);
    }

    public function edit(User $user)
    {
        $this->authorize('update', $user->profile);

        return view('profiles/edit', [
            'user' => $user
        ]);
    }

    public function update(User $user)
    {
        $this->authorize('update', $user->profile);
        
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'url',
            'image' => ''
        ]);

        // we are grabing only the autheticated user!
        auth()->user()->profile->update($data);

        return redirect("/profile/{$user->id}");
    }
}
