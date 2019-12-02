<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function about()
    {
        $nama = 'Rafly Yunandi Aliansyah';
        return view('about', ['nama' => $nama]);
    }
}
