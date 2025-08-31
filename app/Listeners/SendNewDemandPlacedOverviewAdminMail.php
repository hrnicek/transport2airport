<?php

namespace App\Listeners;

use App\Events\DemandPlacedEvent;
use App\Mail\NewDemandPlacedOverviewAdminMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendNewDemandPlacedOverviewAdminMail implements ShouldQueue
{
    use InteractsWithQueue;

    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(DemandPlacedEvent $event): void
    {
        $adminEmail = 'info@transport2airport.cz';

        Mail::to($adminEmail)->send(new NewDemandPlacedOverviewAdminMail($event->demand));
    }
}
