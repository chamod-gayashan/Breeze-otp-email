<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function user()
    {
        return view('user.index');
    }

    public function auth(){
        return view('auth.index');
    }

}
