<?php

namespace App\Http\Controllers;

class PricingController extends Controller
{
    public function index()
    {
        seo()->title('Ceník dopravy na letiště');

        return view('pricing');
    }
}
