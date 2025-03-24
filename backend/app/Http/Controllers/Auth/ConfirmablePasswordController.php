<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
<<<<<<< HEAD
use Inertia\Inertia;
use Inertia\Response;
=======
use Illuminate\View\View;
>>>>>>> 6089fa36348632ee7f80c95b3ff2d9bcc5b60332

class ConfirmablePasswordController extends Controller
{
    /**
     * Show the confirm password view.
     */
<<<<<<< HEAD
    public function show(): Response
    {
        return Inertia::render('Auth/ConfirmPassword');
=======
    public function show(): View
    {
        return view('auth.confirm-password');
>>>>>>> 6089fa36348632ee7f80c95b3ff2d9bcc5b60332
    }

    /**
     * Confirm the user's password.
     */
    public function store(Request $request): RedirectResponse
    {
        if (! Auth::guard('web')->validate([
            'email' => $request->user()->email,
            'password' => $request->password,
        ])) {
            throw ValidationException::withMessages([
                'password' => __('auth.password'),
            ]);
        }

        $request->session()->put('auth.password_confirmed_at', time());

        return redirect()->intended(route('dashboard', absolute: false));
    }
}
