<?php

use Illuminate\Database\Seeder;
use App\testimonial;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Testimonial::class, 2)->create();
    }
}
