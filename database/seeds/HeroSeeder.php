<?php

use Illuminate\Database\Seeder;
use App\hero;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // hero sans majuscule faire réference au hero du dossier APP
        factory(hero::class, 1)->create();
    }
}
