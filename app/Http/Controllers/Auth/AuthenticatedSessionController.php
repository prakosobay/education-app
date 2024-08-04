<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Models\User;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {

        $request->authenticate();

        $request->session()->regenerate();

        $role = User::where('email', $request->email)->select('role_id')->first();
        // dd($role);
        if ($role->role_id == 1) {
<<<<<<< HEAD
            return redirect()->intended(route('adminPanel', absolute: false));
        } else {
            return redirect()->intended(route('mainArea', absolute: false));
=======
            return redirect()->intended(route('dashboard', absolute: false));
        } else {
            return redirect()->intended(route('users', absolute: false));
>>>>>>> a9ad036cb04b3399820c7b7c6c678e15b8800637
        }
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
