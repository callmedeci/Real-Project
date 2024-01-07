<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayWithJsIndexController extends Controller
{
    public function playWithJSIndexView()
    {
        return view('pages.Play_with_JS.index');
    }
}
