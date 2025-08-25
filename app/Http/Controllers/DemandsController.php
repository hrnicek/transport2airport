<?php

namespace App\Http\Controllers;

use App\Models\Demand;
use Illuminate\Http\Request;

class DemandsController extends Controller
{
    public function success(Request $request, Demand $demand)
    {
        return view('demands.success', compact('demand'));
    }
}
