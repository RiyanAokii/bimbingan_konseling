<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class SessionController extends Controller
{
    public function index()
    {
        return view('sesi/index');
    }

    
        function login(Request $request){
            $request->validate([
                'email'=>'required',
                'password'=>'required',
                
            ],[
                'email.required'=>'you need to enter your email!',
                'password.required'=>'you need to enter your password!',
                
            ]);

            $infologin = [
                'email' => $request->email,
                'password' => $request->password,
            ];
            if (Auth::attempt($infologin)) {
                return redirect('dashboard');
            } else {
                $credentials = [
                    'email' => $infologin['email'],
                    'password' => $infologin['password'],
                ];

                if (Auth::attempt($infologin)) {
                    return redirect('dashboard')->with('success', 'Successfully logged in!');
                } else {
                    // Your validation and error handling code for incorrect login credentials
                }
            
                $emailValidation = Validator::make($credentials, [
                    'email' => 'required|email',
                ]);
            
                $passwordValidation = Validator::make($credentials, [
                    'password' => 'required',
                ]);
            
                if ($emailValidation->fails() && $passwordValidation->fails()) {
                    return redirect('login')->back()
                        ->withErrors('Email and password are required')
                        ->withInput();
                } elseif ($emailValidation->fails()) {
                    return redirect('login')->back()
                        ->withErrors('Email is incorrect')
                        ->withInput();
                } elseif ($passwordValidation->fails()) {
                    return redirect('login')->back()
                        ->withErrors('Password is incorrect')
                        ->withInput();
                } else {
                    return redirect('login')
                        ->witherror('Email and password are incorrect')
                        ->withInput();
                }
            }
            
        }
        
        function logout(){
            Auth::logout();
            return redirect('login');
        }
}
    

