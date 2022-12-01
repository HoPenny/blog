<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    public function hello()
    {
        return 'Hello';
    }
    public function dashboard()
    {
        return view('dashboard');
    }
}
