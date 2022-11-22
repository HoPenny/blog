<?php

namespace App\Http\Controllers;

class NavController extends Controller
{

    // public function nav()
    // {
    //     return view('Layouts.nav');
    // }
    public function nav()
    {
        $data['p1'] = 'picture1';
        $data['p2'] = 'picture2';
        $data['p3'] = 'picture3';

        return view('99', $data);
    }

}
