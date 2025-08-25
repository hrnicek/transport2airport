<?php

namespace App\Http\Controllers;

class CarsController extends Controller
{
    public function index()
    {
        seo()->title('Naše vozový park');

        return view('cars.index');
    }
}
