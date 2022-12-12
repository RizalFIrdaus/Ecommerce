<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;



class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    public function handleToGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
            $finduser = User::where('id_google', $user->id)->first();
            if ($finduser) {
                Auth::login($finduser);
                return redirect('/');
            } else {
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'password' => bcrypt('12345678'),
                    'role' => 0,
                    'id_google' => $user->id,
                    'avatar' => $user->getAvatar(),
                ]);
                Auth::login($newUser);
                return redirect('/');
            }
        } catch (\Throwable $th) {
        }
    }
}
