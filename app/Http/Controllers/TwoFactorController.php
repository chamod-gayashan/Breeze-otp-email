<?php

namespace App\Http\Controllers;

use App\Notifications\SendTwoFactorCode;
use App\Providers\RouteServiceProvider;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
class TwoFactorController extends Controller
{
    public function index(): View
    {
        return view('auth.two-factor');
    }
public function store(Request $request): ValidationException|RedirectResponse
    {
        $request->validate([
            'two_factor_code' => ['integer', 'required'],
        ]);
        $user = auth()->user();
        if ($request->input('two_factor_code') !== $user->two_factor_code) {
            throw ValidationException::withMessages([
                'two_factor_code' => __('The code you entered doesn t match our records'),
            ]);
        }
        $user->resetTwoFactorCode();
        return redirect()->to(RouteServiceProvider::HOME);
    }
    public function resend(): RedirectResponse
    {
        $user = auth()->user();
        $user->generateTwoFactorCode();
        $user->notify(new SendTwoFactorCode());
        return redirect()->back()->withStatus(__('Code has been sent again'));
    }
}
