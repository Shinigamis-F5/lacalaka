<?php

namespace App\Observers;

use App\Models\Party;
use App\Http\Controllers\WhatsappApiController;

class PartyObserver
{
    /**
     * Handle the Party "created" event.
     *
     * @param  \App\Models\Party  $party
     * @return void
     */
    public function created(Party $party)
    {
        //
    }

    /**
     * Handle the Party "updated" event.
     *
     * @param  \App\Models\Party  $party
     * @return void
     */
    public function updated(Party $party)
    {
        if ($party->is_active === false) {
            WhatsappApiController::sendMsg($party);
        }
    }

    /**
     * Handle the Party "deleted" event.
     *
     * @param  \App\Models\Party  $party
     * @return void
     */
    public function deleted(Party $party)
    {
        //
    }

    /**
     * Handle the Party "restored" event.
     *
     * @param  \App\Models\Party  $party
     * @return void
     */
    public function restored(Party $party)
    {
        //
    }

    /**
     * Handle the Party "force deleted" event.
     *
     * @param  \App\Models\Party  $party
     * @return void
     */
    public function forceDeleted(Party $party)
    {
        //
    }
}
