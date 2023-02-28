<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function create(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->role == 'admin') {
                return redirect('dashboard');
            } elseif ($user->role == 'kasir') {
                return redirect('regis');
            } elseif ($user->role == 'owner') {
                echo "ini owner";
            }

        }
          echo "gagal";
    }
}
