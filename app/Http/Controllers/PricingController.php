<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PricingController extends Controller
{
    public function viewPricingPage()
    {
        return view('pages.Pricing_Page.roocket');
    }
}
