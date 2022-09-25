<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login.index', [
            'active' => 'login',
            'title'  => 'Login'
        ]);
    }

    public function authenticate(Request $request){
        $request->validate([
            'email'     => 'required|email:dns',
            'password'  => 'required'
        ]);
    }
}
