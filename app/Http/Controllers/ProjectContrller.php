<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectContrller extends Controller
{
    public function projectsView()
    {
        return view('pages.projects');
    }
}
