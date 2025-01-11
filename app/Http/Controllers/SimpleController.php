<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimpleController extends Controller
{
    public function loginShow()
    {
        return view('login');
    }
    public function registerShow()
    {
        return view('register');
    }
}
