<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;



class FacebookController extends Controller
{
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }
    public function handleToFacebookCallback()
    {
        try {
            $user = Socialite::driver('facebook')->user();
            $finduser = User::where('id_facebook', $user->id)->first();


            if ($finduser) {
                Auth::login($finduser);
                return redirect('/');
            } else {
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'password' => bcrypt('12345678'),
                    'role' => 0,
                    'id_facebook' => $user->id,
                    // 'avatar' => $user->avatar
                    'avatar' => $user->avatar . "&access_token=" . $user->token
                ]);
                Auth::login($newUser);
                return redirect('/profile/edit');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
