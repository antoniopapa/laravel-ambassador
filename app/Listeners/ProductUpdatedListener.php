<?php

namespace App\Listeners;

use App\Events\ProductUpdatedEvent;

class ProductUpdatedListener
{
    public function handle(ProductUpdatedEvent $event)
    {
        \Cache::forget('products_frontend');
        \Cache::forget('products_backend');
    }
}
