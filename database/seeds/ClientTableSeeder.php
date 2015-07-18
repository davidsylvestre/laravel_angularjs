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
        \DasProject\Client::truncate();
        factory(\DasProject\Client::class, 10)->create();
    }
}
