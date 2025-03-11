<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    //

    public function create(){

        return view('components.auth.login');
    }

     public function store(){

        return view('components.auth.store');
    }

    public function login(Request $request){

       $attributes = $request->validate([
            'email'=> 'required|email',
            'password'=> 'required'
        ]);


       if(! Auth::attempt($attributes)){

          throw ValidationException::withMessages([
            'email'=> 'Your provided credentials could not be verified',
            'password'=> 'Your provided credentials could not be verified'
          ]);

       }

       request()->session()->regenerate();

       return redirect('/');

    }

    public function register(Request $request){

        $userAttributes = $request->validate([
            'name'=> ['required'],
            'email'=> ['required', 'email', 'unique:users,email'],
            'password'=> ['required', 'confirmed', Password::min(4)]
        ]);

       $employerAttributes = $request->validate([
            'employer'=> ['required'],
            'logo'=> ['required', File::types(['jpg', 'png', 'jpeg', 'webp'])],
        ]);


        $user = User::create($userAttributes);

        $logoPath = $request->logo->store('logos');


        $user->employer()->create([
            'name' => $employerAttributes['employer'],
            'logo' => $logoPath,
        ]);

        Auth::login($user);

        return redirect('/');
    }


    public function destroy(){

        Auth::logout();

        request()->session()->invalidate();

        return redirect('/');

    }
}
