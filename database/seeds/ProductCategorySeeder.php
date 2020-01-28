<?php

use App\ProductCategory;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductCategory::create([
            'name' => 'Burger',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempor, tortor ac auctor ultrices',
            'slug' => 'burger',
            'status' => 'ACTIVE'
        ]);

        ProductCategory::create([
            'name' => 'Pizza',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempor, tortor ac auctor ultrices',
            'slug' => 'pizza',
            'status' => 'ACTIVE'
        ]);

        ProductCategory::create([
            'name' => 'Checken',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempor, tortor ac auctor ultrices',
            'slug' => 'checken',
            'status' => 'ACTIVE'
        ]);

        ProductCategory::create([
            'name' => 'Rice',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempor, tortor ac auctor ultrices',
            'slug' => 'rice',
            'status' => 'ACTIVE'
        ]);

        ProductCategory::create([
            'name' => 'Baverages',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempor, tortor ac auctor ultrices',
            'slug' => 'baverages',
            'status' => 'ACTIVE'
        ]);

        ProductCategory::create([
            'name' => 'Coldrinks',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempor, tortor ac auctor ultrices',
            'slug' => 'coldrinks',
            'parent_id' => 5,
            'status' => 'ACTIVE'
        ]);
    }
}
