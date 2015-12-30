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
        \DasProject\Entities\Core\Client::truncate();
        factory(\DasProject\Entities\Core\Client::class, 10)->create();
    }
}
