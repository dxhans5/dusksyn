<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\RedirectResponse;

class AppController extends Controller
{
    /**
     * Show the application homepage.
     *
     * @return \Illuminate\View\View
     */
    public function homepage()
    {
        return view('homepage');
    }

    /**
     * Show the application login page.
     *
     * @return \Illuminate\View\View
     */
    public function login()
    {
        return view('login');
    }

    /**
     * Show the application login page.
     *
     * @return \Illuminate\View\View
     */
    public function authenticate(Request $request)
    {
        // Log the request data for debugging
        Log::info('Login attempt', [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ]);

        // Validate the request data
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended(route('admin.dashboard'));
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
