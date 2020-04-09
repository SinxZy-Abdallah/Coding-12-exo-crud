<?php

use Illuminate\Database\Seeder;
use App\portofolio;

class PortofolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(portofolio::class, 8)->create();
    }
}
