<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{


    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        //modificar el request
        $request->request->add(['username' => Str::slug($request->get('username'))]);
        //validacion

        $this->validate($request, [
            'name' => 'required|max:5',
            'username' => 'required|unique:users|min:3|max:30',
            'email' => 'required|unique:users|email|max:60',
            'password' => 'required|confirmed|min:6',
        ]);

        User::create([
            'name' => $request->get('name'),
            'username' => $request->username,
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),

        ]);
    }
}
