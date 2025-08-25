<?php

namespace App\Events;

use App\Models\Demand;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class DemandPlacedEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public Demand $demand;

    /**
     * Create a new event instance.
     */
    public function __construct(Demand $demand)
    {
        $this->demand = $demand;
    }
}