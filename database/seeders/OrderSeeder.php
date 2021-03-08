<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::factory(30)->create()->each(function (Order $order) {
            OrderItem::factory(random_int(1, 5))->create([
                'order_id' => $order->id
            ]);
        });
    }
}
