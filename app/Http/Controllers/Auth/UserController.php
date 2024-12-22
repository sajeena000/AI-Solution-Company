<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $request)
    {
        if ($request->isMethod('POST')) {
            $request->validate([
                'email' => 'required|email',
                'password' => 'required|min:8|max:32',
            ]);

            $email = $request->email;
            $password = $request->password;

            if (strlen($password) < 8) {
                return back()
                    ->with(['error' => 'Password must be at least 8 characters long.'])
                    ->onlyInput('email');
            }

            $user = User::where('email', $email)->first();
            if (!$user) {
                return back()
                    ->with(['error' => 'User doesn’t exists.'])
                    ->onlyInput('email');
            }

            if (!Hash::check($password, $user->password)) {
                return back()
                    ->with(['error' => 'The password is incorrect.']) 
                    ->onlyInput('email');
            }
            

            // User can be authenticated
            Auth::login($user);

            return redirect()->route('admin.dashboard');
        }
        return view('auth.login');
    }

    public function logout()
{
    Auth::logout();
    return redirect()->route('login')->with('success', 'You have successfully logged out.');
}

}
