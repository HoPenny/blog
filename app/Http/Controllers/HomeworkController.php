<?php

namespace App\Http\Controllers;

class HomeworkController extends Controller
{

    public function social_dashboard()
    {
        return view('social_dashboard');
    }
    public function navbar()
    {
        return view('navbar');
    }
    public function grid_layout()
    {
        return view('Layouts.grid_layout');
    }
}