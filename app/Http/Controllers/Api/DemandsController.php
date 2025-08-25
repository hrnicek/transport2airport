<?php

namespace App\Http\Controllers\Api;

use App\Events\DemandPlacedEvent;
use App\Http\Requests\StoreDemandRequest;
use App\Models\Demand;
use Illuminate\Routing\Controller;

class DemandsController extends Controller
{
    public function store(StoreDemandRequest $request)
    {
        $validatedData = $request->validated();
        $validatedData['status'] = 'placed';

        $demand = Demand::create($validatedData);

        // Dispatch event to send admin notification
        DemandPlacedEvent::dispatch($demand);

        return response()->json([
            'status' => 'success',
            'message' => 'Demand created successfully!',
            'redirect_url' => route('demands.success', $demand),
        ], 201);
    }
}
