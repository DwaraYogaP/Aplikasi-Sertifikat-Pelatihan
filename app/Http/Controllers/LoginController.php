<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view('login');
    }

    public function login(Request $request) {
        // dd($request->all());
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (auth()->user()->role === 'admin') {
                notify()->success('Anda Login Sebagai Admin');

                return redirect()->intended('/beranda');
            } else {
                notify()->success('Anda Login Sebagai User');
                return redirect()->intended('/berandaUser');
            }
            // return redirect()->intended('/beranda');
        }
 
        return back()->withErrors([
            'password' => 'Data yang anda masukkan salah',
        ]);
    }

    public function logout(Request $request) {
        Auth::logout();
    
        $request->session()->invalidate();  
        $request->session()->regenerateToken();
    
        return redirect('/');
    }
}
