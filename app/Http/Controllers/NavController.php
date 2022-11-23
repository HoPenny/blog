<?php

namespace App\Http\Controllers;

class NavController extends Controller
{

    // public function nav()// {
    //     return view('Layouts.nav');
    // }

    public function nav()
    {
        $data['p1'] = 'picture1';
        $data['p2'] = 'picture2';
        $data['p3'] = 'picture3';
        $data['p4'] = 'picture4';
        $data['p5'] = 'picture5';
        $data['p6'] = 'picture6';

        $data['pics'] = $data;

        return view('99', $data);
    }

}
