<?php

namespace App\Http\Controllers;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class LoginSocialiteController extends Controller
{
    public function validator($driver)
    {
        Validator::validate(compact('driver'), ['driver' => 'required|in:google,facebook']);

        return Socialite::driver($driver)->redirect();
    }

    public function callback($driver)
    {
        $socialUser = Socialite::driver($driver)->user();

        $passwordCrypto = random_bytes(10);
        $randomPassword = base64_encode($passwordCrypto);
        $passwordHashed = password_hash($randomPassword, PASSWORD_BCRYPT);
    
        $user = User::updateOrCreate([
            'email' => $socialUser->email,
        ], [
            'name' => $socialUser->name,
            'provider' => $driver,
            'provider_id' => $socialUser->id,
            'password' => $passwordHashed,
        ]);
    
        auth()->login($user);
    
        return redirect()->route('dashboard');
    }
}
