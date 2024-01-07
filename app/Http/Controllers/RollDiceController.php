<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RollDiceController extends Controller
{
    public function rollDiceView()
    {
        return view('pages.Play_with_JS.roll-dice-game');
    }
}
