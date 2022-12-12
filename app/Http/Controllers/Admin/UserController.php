<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $users = User::orderBy('id', 'desc')->where('name', 'LIKE', '%' . $request->search . '%')->paginate(5);
        } else {
            $users = User::orderBy('id', 'desc')->paginate(10);
        }
        return view('dashboard.users.index', compact('users'));
    }
}
