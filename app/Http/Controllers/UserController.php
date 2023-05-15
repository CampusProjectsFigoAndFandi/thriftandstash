<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    public function getRegister()
    {
        return view('register');
    }
    public function submitRegister(Request $request)
    {
        $formFields = $request->validate([
            'name' => 'required',
            'username' => ['required', 'min:3', Rule::unique('users', 'username')],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'confirmed', 'min:6']
        ]);

        // Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        // Create User
        $user = User::create($formFields);

        // also Login
        // auth()->login($user);
        Auth::login($user);
        return redirect('/posts')->with('success', 'Akun berhasil dibuat!');
    }
    public function getLogin()
    {
        return view('login');
    }
    public function submitLogin(Request $request)
    {
        $formFields = $request->validate([
            'username' => ['required', 'min:3'],
            'password' => ['required']
        ]);
        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();
            return redirect('/posts')->with('success', 'Berhasil login!');
        }
        return back()->withErrors(['username' => 'Username atau password salah'])->onlyInput('username');
    }
    public function logout(Request $request)
    {
        // dd($request);
        auth()->logout();
        // destroy user session and create new (tamu/guest) session

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/posts')->with('success', 'Berhasil logout!');
    }
    public function manage(User $user)
    {
        $post = Post::where('user_id', $user->id)->get();
        return view('manage', [
            'user' => $user,
            'posts' => $post,
        ]);
    }
}
