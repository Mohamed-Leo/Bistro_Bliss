<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{

    // google-----------------
    public function googleform() {
        return Socialite::driver('google')->redirect();
    }
    public function googlelogin() {
        $user = Socialite::driver('google')->user();

        $check_user = User::where('google_id' , $user->id)->first();

        if (!$check_user) {
            $new_user = User::create([
                'name' => $user->getName(),
                'email'=> $user->getEmail(),
                'google_id' => $user->getId(),
            ]);

            Auth::login($new_user);
            return redirect()->route('home.page');
            // return redirect()->intended('dashboard');
        }
        else {
            Auth::login($check_user);
            return redirect()->route('home.page');
            // return redirect()->intended('dashboard');
        }
    }


    // facebook-------------
    public function facebookform() {
        return Socialite::driver('facebook')->redirect();
    }

    public function facebooklogin () {
        $user = Socialite::driver('facebook')->user();

        $check_user = User::where('facebook_id' , $user->id)->first();

        if (!$check_user) {
            $new_user = User::create([
                'name' => $user->getName(),
                'email'=> $user->getEmail(),
                'facebook_id' => $user->getId(),
            ]);

            Auth::login($new_user);
            return redirect()->route('home.page');
            // return redirect()->intended('dashboard');
        }

        else {
            Auth::login($check_user);
            return redirect()->route('home.page');
            // return redirect()->intended('dashboard');
        }
    }
}
