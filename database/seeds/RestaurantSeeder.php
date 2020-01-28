<?php

use App\Restaurant;
use Illuminate\Database\Seeder;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Restaurant::create([
            'name' => 'Pizza Hut',
            'email' => 'email1@email.com',
            'phone' => '0927876498',
            'mobile' => '03217876498',
            'address' => '23 rode ste pakistan',
            'description' => 'Lorem ipsum dolor sit amet.',
            'long_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempor, tortor ac auctor ultrices',
            'slug' => 'pizza_hut',
            'status' => 'ACTIVE',
            'restaurateur_id' => 2,
        ]);

        Restaurant::create([
            'name' => 'Jalil Kabab',
            'email' => 'email2@email.com',
            'phone' => '0927876498',
            'mobile' => '03217876498',
            'address' => '23 rode ste pakistan',
            'description' => 'Lorem ipsum dolor sit amet.',
            'long_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempor, tortor ac auctor ultrices',
            'slug' => 'jalil_kabab',
            'status' => 'ACTIVE',
            'restaurateur_id' => 2,
        ]);
        
        Restaurant::create([
            'name' => 'KFC',
            'email' => 'email3@email.com',
            'phone' => '0927876498',
            'mobile' => '03217876498',
            'address' => '23 rode ste pakistan',
            'description' => 'Lorem ipsum dolor sit amet.',
            'long_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempor, tortor ac auctor ultrices',
            'slug' => 'kfc',
            'status' => 'ACTIVE',
            'restaurateur_id' => 2,
        ]);
    }
}
