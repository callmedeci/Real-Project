<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutContrller extends Controller
{
    public function aboutView()
    {
        return view('pages.about');
    }
}
