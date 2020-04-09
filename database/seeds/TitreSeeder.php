<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('titres')->insert([
            'titre'=>'Nos Services',
            'description'=>'Vamos a la playa',
        ]);
        // *******************************************
        DB::table('titres')->insert([
            'titre'=>'Portofolio',
            'description'=>'Vamos a la playa amigo',
        ]);
        // *******************************************
        DB::table('titres')->insert([
            'titre'=>'Testimonials',
            'description'=>'Vamos a la playa amigo',
        ]);
        // *******************************************
        DB::table('titres')->insert([
            'titre'=>'Team',
            'description'=>'Vamos a la playa amigo',
        ]);
        // *******************************************
        DB::table('titres')->insert([
            'titre'=>'Contact',
            'description'=>'Vamos a la playa amigo',
        ]);
        // *******************************************
        DB::table('titres')->insert([
            'titre'=>'About Us',
            'description'=>'Vamos a la playa amigo',
        ]);
    }
    
}
