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

class HomeworkController extends Controller
{

    public function social_dashboard()
    {
        return view('social_dashboard');
    }
}