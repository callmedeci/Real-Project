<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuessGameController extends Controller
{
    public function guessGameView()
    {
        return view('pages.Play_with_JS.guessGame');
    }
}
