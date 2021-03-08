<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AmbassadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory(30)->create([
            'is_admin' => 0
        ]);
    }
}
