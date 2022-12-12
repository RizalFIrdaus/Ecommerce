<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Http;



class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;


    function authenticated($request, $user)
    {
        if ($request->has('remember_me')) {
            Cookie::queue('mbu', $request->email, 1440);
            Cookie::queue('mbp', $request->password, 1440);
        } else {
            Cookie::queue(Cookie::forget('mbu'));
            Cookie::queue(Cookie::forget('mbp'));
        }
        $response = Http::withHeaders([
            'Accept' => 'application/json',
        ])->post('https://masterbagasi.online/api/v1/login', [
            'email' => $request->email,
            'password' => $request->password,
        ]);
        // dd($response->body(['token']));
        if (Auth::user()->role == '1') {
            return redirect('/admin/dashboard')->with('message', 'Welcome to Dasboard');
        } else {
            return redirect('/');
        }


        // if (Auth::user()->role == '1') {
        //     return redirect('/admin/dashboard')->with('message', 'Welcome to Dasboard');
        // } else {
        //     return redirect('/');
        // }
    }
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->flush();

        $request->session()->regenerate();

        return redirect('/');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
