<?php

use App\Cuisine;
use Illuminate\Database\Seeder;

class CuisineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cuisine::create([
            'name'           => 'Chinees'
        ]);


        Cuisine::create([
            'name'           => 'Fas Food'
        ]);


        Cuisine::create([
            'name'           => 'Pakistani'
        ]);


    }
}
