<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create()
    {
       return view('auth.register');
           
    }

    public function store(Request $request)
    {
      $this->validate($request,[
         'name'=>'required|max:255',
         'email'=>'required|email|unique:users,email',
         'password'=>'required|confirmed',

      ]);

      User::create([
          'name'=>$request->name,
          'email'=>$request->email,
          'password'=>Hash::make($request->password),
      ]);

      return redirect()
      ->route('dashboard')
      ->with('status','thank you for join us');
    }
}
