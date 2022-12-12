<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;





class EditProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function menungguPembayaran()
    {
        return view('home.menunggu_pembayaran');
    }
    public function daftarTransaksi()
    {
        return view('home.daftar_transaksi');
    }
    public function updateNotif()
    {
        return view('home.update_notif');
    }
    public function ulasan()
    {
        return view('home.ulasan');
    }
    public function diskusiProduk()
    {
        return view('home.diskusi_produk');
    }
    public function chatProfile()
    {
        return view('home.chat_profile');
    }
    public function index()
    {
        return view('home.profile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $request->validate([
            'name' => 'max:24',
            'avatar' => 'mimes:png,jpg,jpeg',
            'handphone' => 'max:12',
            'zipcode' => 'max:10'
        ]);
        $user = User::where('email', Auth::user()->email)->first();
        $user->name = $request->name;
        if (!$user->id_google) {
            if ($user->email == $request->email) {
                $user->email = $user->email;
            } else {
                $request->validate([
                    'email' => 'unique:users',
                ]);
                $user->email = $request->email;
            }
            if ($request->filled('current_password') && $request->filled('new_password') && $request->filled('re_new_password')) {
                if (Hash::check($request->current_password, $user->password)) {
                    if ($request->new_password == $request->re_new_password) {
                        $user->password = Hash::make($request->new_password);
                    } else {
                        return redirect()->back()->with('failed', 'Validation Password not match');
                    }
                } else {
                    return redirect()->back()->with('failed', 'Current Password Not Match');
                }
            }
        }
        if ($request->file('avatar')) {
            $path = public_path() . $user->avatar;
            if (file::exists($path)) {
                file::delete($path);
            }
            $file = $request->file('avatar');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move('image/uploads/avatars/', $filename);
            $user->avatar = '/image/uploads/avatars/' . $filename;
        } else {
            $user->avatar = $user->avatar;
        }
        $user->gender = $request->gender;
        $user->birthday = $request->birthday;
        $user->handphone = $request->handphone;
        $user->address = $request->address;
        $user->zipcode = $request->zipcode;
        $user->save();
        // dd(url()->previous());
        return redirect()->back()->with('success', 'Profile Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
