<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function login()
    {
        return view('auth');
    }

    public function register()
    {
        return view('pages.register');
    }

    public function forgot_password()
    {
        return view('pages.forgot-password');
    }

    public function lockscreen()
    {
        return view('pages.lockscreen');
    }

    public function under_maintenance()
    {
        return view('pages.under-maintenance');
    }

    public function error400()
    {
        return view('pages.error400');
    }

    public function error401()
    {
        return view('pages.error401');
    }

    public function error403()
    {
        return view('pages.error403');
    }

    public function error404()
    {
        return view('pages.error404');
    }

    public function error500()
    {
        return view('pages.error500');
    }

    public function error503()
    {
        return view('pages.error503');
    }

}
