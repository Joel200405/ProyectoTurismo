<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class loginController extends Controller
{
    //

    public function index(){
        return view('login');
    }
    
    //Metodo para validar el login
    public function validateLogin(Request $request){
        $credentials = $request->validate([
            'username' => ['required'],
            'password'=>['required']
        ]);

        if(Auth::attempt(['username' => $credentials['username'], 'password' => $credentials['password']])){
            //Obtener el usuario autenticado
            $request->session()->regenerate();
            
            //Redirigir segun el tipo de usuario
            if(Auth::user()->is_admin){
                return redirect()->route('admin.dashboard');
            }else{
                return redirect()->route('home.index');
            }
        }

        //Si las credenciales no son validas
        return back()->withErrors([
            'username' => 'Las credenciales proporcionadas no son correctas',
        ]);

    }
}