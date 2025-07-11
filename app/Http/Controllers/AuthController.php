<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\Rule;
use ErrorException;

class AuthController extends Controller
{
    //
    public function onboarding(Request $request)
    {
        $request->validate([
            'first_name' => ['bail', 'required', 'string'],
            'last_name' => ['bail', 'required', 'string'],
            'email' => ['bail', 'required', 'email', Rule::unique('users', 'email')],
            'password' => ['bail', 'required', Password::defaults(), 'confirmed'],
            'role' => ['bail', 'required', 'string']
        ]);

        try {
            $user = User::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            $role = Role::create([
                'role' => $request->role,
                'status' => 'active'
            ]);

            UserRole::create([
                'roles_id' => $role->id,
                'users_id' => $user->id,
                'user_status' => 'active'
            ]);

            Auth::login($user);

            return redirect()->route('home')->with('message', 'Onboarding process successful 😊, Setting up shop 😊');
        } catch (ErrorException $e) {
            return response()->json(['error' => $e, 'message' => "We're sorry. An error occured!! Getting back to it! 😊"], 500);
        }
    }

    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', Password::defaults()],
        ]);

        $remember = $request->remember_me === 'on' ? true : false;

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();

            return redirect()->intended()->with('message', 'Login successful 😊, Setting up shop 😊');
        }
        /* Validate the login fields and send to the frontend */
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.'
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('signin.view');
    }
}
