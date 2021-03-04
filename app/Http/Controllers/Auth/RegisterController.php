<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Currency;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
    	return view('auth.register');
    }

    public function store(Request $request)
    {

        // Create the user
        // @todo fix this shit! this is really bad

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Send email about successfull registration

        // Login the created user
        Auth::loginUsingId($user->id);

        // Redirect with message about successfull registration
        return redirect(route('company.create'));
    }
}
