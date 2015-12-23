<?php

use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DasProject\Models\Client::truncate();
        factory(\DasProject\Models\Client::class, 10)->create();
    }
}
