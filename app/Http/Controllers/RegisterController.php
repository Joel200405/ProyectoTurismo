<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    //
    public function index(){
        return view('register');
    }
    
    public function indexAd(){
        return view('registerAdmin');
    }

    public function store(Request $request){
        
        //dd($request->all());

        //Validar los datos ingresados
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|string|max:100',
            'username' => 'required|string|max:50|unique:users,username',
            'password' => 'required|string|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Crear el nuevo usuario
        User::create([
            'nombre' => $request->nombre,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'is_admin' => false, // Por defecto, el nuevo usuario no es administrador
        ]);

        // Redireccionar al login
        return redirect()->route('login.index')->with('success', 'Usuario registrado exitosamente.');
        
    }

    //Para el registro de usuarios administradores
    public function storeAd(Request $request){
        //dd($request->all());

        //Validar los datos ingresados
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|string|max:100',
            'username' => 'required|string|max:50|unique:users,username',
            'password' => 'required|string|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Crear el nuevo usuario
        User::create([
            'nombre' => $request->nombre,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'is_admin' => true, // Por defecto, el nuevo usuario no es administrador
        ]);

        // Redireccionar al login
        return redirect()->route('user.admin')->with('success', 'Usuario registrado exitosamente.');
    }

    public function users(){
        $users=User::paginate(20);
        return view('users', compact('users'));
    }
}