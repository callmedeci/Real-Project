<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesContrller extends Controller
{
    public function articlesView()
    {
        return view('pages.articles');
    }
}
