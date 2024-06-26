<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            "title" => "register"
        ]);
    }
    public function create(Request $request)
    {
        $validateData =  $request->validate([
            'name' => 'required',
            'username' => 'required | unique:users',
            'email' => 'required |email| unique:users',
            'password' => 'required | min:3'
        ]);
        User::create($validateData);

        return redirect('/login')->with('status', 'Register successful, Please login.');
    }
}
