<?php

namespace Database\Factories;

use App\Models\Link;
use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        /** @var Link $link */
        $link = Link::inRandomOrder()->first();

        return [
            'code' => $link->code,
            'user_id' => $link->user->id,
            'ambassador_email' => $link->user->email,
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'email' => $this->faker->email,
            'complete' => 1
        ];
    }
}
