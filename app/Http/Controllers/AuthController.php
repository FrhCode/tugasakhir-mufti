<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login () {
        return view('auths.login');
    }

    public function postlogin(Request $request){
        if(Auth::attempt($request->only('email', 'password'))){
            return redirect('/dashboard');
        } else {
            return redirect('/login')->with('error', 'Email atau Password salah');
        }
        
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'

        ]);
    }

    public function register () {
        return view('auths.register');
    }

    public function postregister(Request $request){

        if ($request->password == $request->confirmPassword) {

            $this->validate($request, [
                'name' => 'required',
                'email' => 'unique:users|required',
                'password' => 'required'

            ]);
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'is_admin' => 0
            ]);
    
            return redirect('/login')->with('success', 'Berhasil. Silahkan Login');
        }

        return redirect('/register')->with('error', 'Password tidak sesuai');
        
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
