<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Filament\Facades\Filament;

class OauthController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();

            // Cek apakah user sudah ada berdasarkan gauth_id atau email
            $user = User::where('gauth_id', $googleUser->id)->orWhere('email', $googleUser->email)->first();

            if (!$user) {
                // Jika user belum ada, buat user baru
                $user = User::create([
                    'name' => $googleUser->name,
                    'email' => $googleUser->email,
                    'gauth_id' => $googleUser->id,
                    'gauth_type' => 'google',
                    'password' => bcrypt('admin@123'), // Menggunakan bcrypt untuk password
                ]);
            }

            // Login user
            Auth::login($user);

            // 🚀 Redirect ke Filament Admin Panel
            return redirect(Filament::getPanel('admin')->getUrl());
        } catch (Exception $e) {
            return redirect('/login')->with('error', 'Gagal login dengan Google: ' . $e->getMessage());
        }
    }
}
