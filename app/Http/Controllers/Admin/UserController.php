<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            'email' => 'required|email|unique:users',
            'password'=> 'required|confirmed'
        ]);
        // var_dump($request->all());

        $user = User::create ([
            'name'=> $request->name,
            'email'=> $request->email,
            'password' => bcrypt($request->password),
        ]);


        
        session()->flash('success', 'Регистрация пройдена');
        Auth::login($user);
        return redirect()->route('admin.index');
    }

    public function loginForm() {
        return view('user.login');
    }

    public function login(Request $request) {
        // dd($request->all());
        $request->validate([
            'email' => 'required|email',
            'password'=> 'required'
        ]);

        if (Auth::attempt([
            'email' => $request->email,
            'password'=> $request->password,
        ])) {
            session()->flash('success', 'Вы вошли!');
            if (Auth::user()->is_admin) {
                return redirect()->route('admin.index');
            }
        }
        return redirect()->back()->with('error', 'Неверный логин или пароль...');
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('login.create');
    }
}