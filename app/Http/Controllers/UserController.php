<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function edit(User $user){
        return view('userEdit', compact('user'));
    }

    public function update(Request $request, User $user){
        $user->nombre = $request->nombre;
        $user->username = $request->username;
        $user->google_id = $request->google_id;
        $user->is_admin = $request->is_admin;

        $user->save();

        return redirect()->route('user.admin', $user);
    }
    
    public function destroy(User $user){
        $user->delete();

        return redirect()->route('user.admin');
    }
}