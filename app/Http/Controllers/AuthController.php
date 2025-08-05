<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
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

            // $role = Role::create([
            //     'role' => $request->role,
            //     'status' => 'active'
            // ]);

            UserRole::create([
                'role_id' => Role::where(['role' => strtolower($request->role)])->first()->id,
                'user_id' => $user->id,
                'user_status' => 'active'
            ]);

            Auth::login($user);

            return redirect()->route('home')->with('message', 'Onboarding process successful 😊, Setting up shop 😊');
        } catch (ErrorException $e) {
            Log::error($e->getMessage());
            return redirect()->route('home')->with('showPopup', ['type' => 'error', 'message' => "We're sorry. An error occured!! Getting back to it! 😊"]);
        }
    }

    public function adminCreateUser(Request $request)
    {
        $request->validate([
            'first_name' => ['bail', 'required', 'string'],
            'last_name' => ['bail', 'required', 'string'],
            'email' => ['bail', 'required', 'email', Rule::unique('users', 'email')],
            'role' => ['bail', 'required']
        ]);

        try {
            $user = User::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'password' => Hash::make('Password12@'),
            ]);

            /* $role = Role::create([
                'role' => $request->role,
                'status' => 'active'
            ]); */

            UserRole::create([
                'role_id' => $request->role,
                'user_id' => $user->id,
                'user_status' => 'active'
            ]);

            return redirect()->route('admin-users.index')->with('showPopup', 'User added successfully 😊');
        } catch (ErrorException $e) {
            return redirect()->route('admin-users.index')->with( 'showPopup', ['message' => "We're sorry. An error occured!! Getting back to it! 😊", 'type'=> 'error']);
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
