<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function login(){
        return view('admin.auth.login');
    }
    public function reg(){
        return view('admin.auth.reg');
    }

    public function registr_store( Request $request){


        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:2',
            'password_conf' => 'required|same:password',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        Auth::login($user);
        return redirect()->route('categories.index');

    }



    public function authenticate(Request $request): RedirectResponse

    {

  
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->route('categories.index');
        }
 
        return back()->withErrors([
            'email' => 'Bunday user joq.',
        ])->onlyInput('email');
       
    }

    public function logout()
    {

        
        Auth::logout();

        return redirect('/');
    }


    
}
