<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(HeroSeeder::class);
        $this->call(AboutSeeder::class);
        $this->call(ServicesSeeder::class);
        $this->call(SubscribeSeeder::class);
        $this->call(PortofolioSeeder::class);
        $this->call(TestimonialSeeder::class);
        $this->call(TitreSeeder::class);
        $this->call(TeamSeeder::class);
        $this->call(ContactSeeder::class);
    }
}
