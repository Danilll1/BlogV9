<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:user',
            'password'=> 'required|confirmed'
        ]);
        //dd($request->all());

        $user = User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password' => bcrypt($request->password),
        ]);

        session()->flash('success', 'Регистрация пройдена');
        Auth::login($user);
        return redirect()->route('home');
    }

    

    
}
