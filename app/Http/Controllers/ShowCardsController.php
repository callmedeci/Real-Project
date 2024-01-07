<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowCardsController extends Controller
{
    public function showCardsView()
    {
        return view('pages.Play_with_JS.showCards');
    }
}
