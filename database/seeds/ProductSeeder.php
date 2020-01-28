<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Checken Burger',
            'description' => 'Lorem ipsum dolor sit amet.',
            'long_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempor, tortor ac auctor ultrices',
            'price' => 250,
            'slug' => 'checken_burger',
            'status' => 'ACTIVE',
            'category_id' => 1,
        ]);

        Product::create([
            'name' => 'Speacial Pizza',
            'description' => 'Lorem ipsum dolor sit amet.',
            'long_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempor, tortor ac auctor ultrices',
            'slug' => 'speacial_pizza',
            'price' => 300,
            'status' => 'ACTIVE',
            'category_id' => 2,
        ]);

        Product::create([
            'name' => 'Checken Karahi',
            'description' => 'Lorem ipsum dolor sit amet.',
            'long_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempor, tortor ac auctor ultrices',
            'slug' => 'checken_karahi',
            'price' => 500,
            'category_id' => 3,
            'status' => 'ACTIVE'
        ]);

        Product::create([
            'name' => 'Polao',
            'description' => 'Lorem ipsum dolor sit amet.',
            'long_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempor, tortor ac auctor ultrices',
            'slug' => 'polao',
            'price' => 200,
            'category_id' => 4,
            'status' => 'ACTIVE'
        ]);

        Product::create([
            'name' => 'Cocke',
            'description' => 'Lorem ipsum dolor sit amet.',
            'long_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempor, tortor ac auctor ultrices',
            'slug' => 'cocke',
            'price' => 30,
            'category_id' => 6,
            'status' => 'ACTIVE'
        ]);

    }
}
