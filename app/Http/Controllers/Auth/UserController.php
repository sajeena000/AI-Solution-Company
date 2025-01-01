<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('name', 'ASC')->get();
        $roles = Role::orderBy('name', 'ASC')->get();
        return view('admin.pages.users.index', compact('users', 'roles'));
    }

    public function create()
    {
        return view('admin.pages.users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:4|confirmed',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->role = 'admin';
        $user->save();

        return redirect()->route('admin.users.index');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.pages.users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'nullable|min:4|confirmed',
        ]);

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->filled('password')) {
            $user->password = $request->password;
        }
        $user->save();

        return redirect()->route('admin.users.index');
    }

    public function destroy($id)
    {
        if (Auth::id() == $id) {
            Session::flash('error', 'You cannot delete your self.');
            return back();
        }
        User::destroy($id);
        return back();
    }

    public function login(Request $request)
    {
        if ($request->isMethod('POST')) {
            $request->validate([
                'email' => 'required|email',
                'password' => 'required|min:4|max:32',
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
