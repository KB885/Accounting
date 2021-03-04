<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthenticateController extends Controller
{
    public function index()
    {
        if(Auth::check()) {
            return back();
        }

       return view('auth.login');
    }

    public function authenticate(Request $request)
    {
    	if(Auth::attempt([
    		'email' => $request->input('email'),
    		'password' => $request->input('password')
    	])) {
    		return redirect(route('company.index'));
    	} else {
    		return redirect(route('auth.login'));
    	}
    }

    public function logout()
    {
    	Auth::logout();
    	return redirect(route('landing'));
    }
}
