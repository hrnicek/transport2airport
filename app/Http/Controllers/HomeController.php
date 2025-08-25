<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        seo()->title('Odvoz na letiště a osobní přeprava Olomouc a okolí.');

        return view('welcome');
    }
}
