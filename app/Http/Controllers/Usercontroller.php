<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Usercontroller extends Controller
{
    public function login(Request $request) {
        $incoming = $request->validate([
            'email_or_username' => ['required'],
            'password' => ['required'],
        ]);
        if(Auth::attempt(['email' => $incoming['email_or_username'], 'password' => $incoming['password']]) ||
           Auth::attempt(['username' => $incoming['email_or_username'], 'password' => $incoming['password']])) {
            $request->session()->regenerate();
            if (Auth::user()->user_type == 'client') {
                return response('client-login', 201);
            } else if (Auth::user()->user_type == 'freelancer') {
                return response('freelancer-login', 201);
            }
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
    public function register(Request $request) {
        // validation and registration logic here...
        $incoming = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'username' => ['required', 'unique:users'],
            'email' => ['required', 'email', 'unique:users'],
            'phone' => ['required', 'min:10', 'max:10', 'unique:users'],
            'password' => ['required','min:6'],
            'user_type' => 'required',
            'terms_condition' => 'required',
        ]);


        if($incoming['password'] != $request['confirm_password']) {
            return response('passwords do not match', 400);
        } else{
            // $incoming['password'] = bcrypt($incoming['password']);
            $user = User::create([
                'first_name' => $request->input('first_name'),
                'last_name' => $request->input('last_name'),
                'username' => $request->input('username'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'password' => bcrypt($request->input('password')),
                'user_type' => $request->input('user_type'),
                'terms_condition' => $request->has('terms_condition') ? 1 : 0,  // Convert to integer
            ]);
            Auth :: login($user);
            if($incoming['user_type'] == 'client') {
                return response('client', 201);
            } else if($incoming['user_type'] == 'freelancer') {
                return response('freelancer', 201);
            }
        };
        
       
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
