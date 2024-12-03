<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Menampilkan form register
    public function showRegisterForm()
    {
        return view('register');
    }

    // Menyimpan data dari form dan mengarahkan ke halaman welcome
    public function submitRegisterForm(Request $request)
    {
        // Validasi input dari form
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'gender' => 'required|string',
            'nationality' => 'required|string',
            'language' => 'required|array',
            'bio' => 'required|string',
        ]);

        // Mengirim data nama depan dan belakang ke halaman welcome
        return redirect()->route('welcome')->with('first_name', $validated['first_name'])->with('last_name', $validated['last_name']);
    }

    // Menampilkan halaman welcome
    public function welcome()
    {
        return view('welcome');
    }
}
