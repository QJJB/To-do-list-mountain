<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
<<<<<<< HEAD
use Inertia\Inertia;
use Inertia\Response;
=======
use Illuminate\View\View;
>>>>>>> 6089fa36348632ee7f80c95b3ff2d9bcc5b60332

class EmailVerificationPromptController extends Controller
{
    /**
     * Display the email verification prompt.
     */
<<<<<<< HEAD
    public function __invoke(Request $request): RedirectResponse|Response
    {
        return $request->user()->hasVerifiedEmail()
                    ? redirect()->intended(route('dashboard', absolute: false))
                    : Inertia::render('Auth/VerifyEmail', ['status' => session('status')]);
=======
    public function __invoke(Request $request): RedirectResponse|View
    {
        return $request->user()->hasVerifiedEmail()
                    ? redirect()->intended(route('dashboard', absolute: false))
                    : view('auth.verify-email');
>>>>>>> 6089fa36348632ee7f80c95b3ff2d9bcc5b60332
    }
}
