<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Auth\Events\Registered;

class ConnexionController extends Controller
{
    public function authenticate(Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

       
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/profile')->with('status', 'Bonjour');
        }

        return back()->withErrors([
            'email' => 'Nous ne vous trouvons pas. Veuillez réessayer.',
        ]);
    }

    public function logout(Request $request) {
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');
    }

    public function addUser(Request $request) {
        $user = new User;

        $credentials = $request->validate([
            'name' => ['required', 'string', 'max:30'],
            'email' => ['required', 'string','email'],
            'password' => ['required', 'string','confirmed', Rules\Password::defaults()], 
            'phone_number' => ['required', 'string', 'max:20']
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->phone_number = $request->phone_number;

        $user->save();

        event(new Registered($user));

        Auth::login($user);

        return redirect('/profile')->with('status', 'Bienvenue');

    }

    public function connexion() {
        return view('connexion');
    }

    public function profile() {
        return view('profile');
    }

    public function inscription() {
        return view('inscription');
    }

    public function forgotPassword() {
        return view('forgotPassword');
    }
}
    

