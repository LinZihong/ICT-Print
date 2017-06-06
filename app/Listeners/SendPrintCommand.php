<?php

namespace App\Listeners;

use App\Events\PrintAFile;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendPrintCommand
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  PrintAFile $event
     * @return void
     */
    public function handle(PrintAFile $event)
    {
        //
        system('lp ' . $event->fileName);
    }
}
