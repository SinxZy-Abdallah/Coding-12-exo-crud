<?php

use Illuminate\Database\Seeder;
use App\services;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Services::class, 6)->create();
    }
}
