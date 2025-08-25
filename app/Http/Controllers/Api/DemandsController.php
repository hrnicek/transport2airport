<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\StoreDemandRequest;
use App\Models\Demand;
use Illuminate\Routing\Controller;

class DemandsController extends Controller
{
    public function store(StoreDemandRequest $request)
    {
        $demand = Demand::create($request->validated());

        return response()->json([
            'message' => 'Demand created successfully!',
            'data' => $demand,
        ], 201);
    }
}
