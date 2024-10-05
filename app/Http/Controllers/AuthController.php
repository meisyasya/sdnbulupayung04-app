<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Menampilkan formulir login
    public function login()
    {
        return view('auth.login');
    }

    // Menampilkan formulir pendaftaran
    public function register()
    {
        return view('auth.register');
    }

    // Menangani pendaftaran pengguna
    public function register_proses(Request $request)
    {
        // Validasi
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed', // Pastikan konfirmasi password ada
        ]);

        // Membuat pengguna baru
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Redirect ke halaman login setelah pendaftaran
        return redirect()->route('login')->with('success', 'Pendaftaran berhasil. Silakan login.');
    }

    // Menangani percobaan login
    public function login_proses(Request $request)
    {
        // Validasi
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

            // Pengecekan login
    if (Auth::attempt([
        'email' => $request->email,
        'password' => $request->password
    ], $request->remember)) {
        // Login berhasil
        return redirect()->route('admin.dashboard');
    } else {
        // Login gagal, kirim pesan error ke view
        return redirect()->route('login')
            ->withErrors(['loginError' => 'Email atau Password Salah'])
            ->withInput();
    }

    }

    // Menangani logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Anda berhasil logout');
    }
}
