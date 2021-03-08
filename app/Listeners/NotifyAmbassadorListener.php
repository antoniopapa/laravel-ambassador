<?php

namespace App\Listeners;

use App\Events\OrderCompletedEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Message;
use Illuminate\Queue\InteractsWithQueue;

class NotifyAmbassadorListener
{
    public function handle(OrderCompletedEvent $event)
    {
        $order = $event->order;

        \Mail::send('ambassador', ['order' => $order], function (Message $message) use ($order) {
            $message->subject('An Order has been completed');
            $message->to($order->ambassador_email);
        });
    }
}
