<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use Hash;
use Illuminate\Http\Request;

class loginController extends Controller
{
    function showLogin() {
        return view('login');
    }

    function showReg() {
        return view('reg');
    }

    public function login(Request $requset) {
        if(Auth::attempt(['email' => $requset['email'], 'password' => $requset['password']])) {
            return redirect('/');
        }
        else {
            return redirect()->back();
        }
    }

    public function reg(Request $request) {
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password'])
        ]);
        $person = User::where('email', $request['email'])->first();
        $person->person()->create([
            'hours' => 0,
            'discount' => 0,
            'money' => 0
        ]);
        return redirect('/');
    }

    public function exit() {
        Auth::logout();
        return redirect('/');
    }
}
