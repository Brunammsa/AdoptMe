<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginSocialiteController extends Controller
{
    public function validator($driver)
    {
        Validator::validate(compact('driver'), ['driver' => 'required|in:google,facebook']);

        return Socialite::driver($driver)->redirect();
    }

    public function callback($driver, Request $request)
    {
        $socialUser = Socialite::driver($driver)->user();
    
        $user = User::updateOrCreate([
            'email' => $socialUser->email,
        ], [
            'name' => $socialUser->name,
            'provider' => $driver,
            'provider_id' => $socialUser->id,
            'password' => Hash::make($request->password),
        ]);
    
        auth()->login($user);
    
        return redirect()->route('dashboard');
    }
}
