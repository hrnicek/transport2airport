<?php

namespace App\Http\Controllers;

class CarsController extends Controller
{
    public function index()
    {
        seo()->title(__('app.seo.cars.title'));

        return view('cars.index');
    }
}
