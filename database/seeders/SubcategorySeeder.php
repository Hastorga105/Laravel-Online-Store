<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $subcategories = [
            [
                'category_id' => 1,
                'name' => 'cellphones and smartphones',
                'slug' => Str::slug('Cellphones and smartphones'),
                'color' => true
            ],
            [
                'category_id' => 1,
                'name' => 'cellphones and accessories',
                'slug' => Str::slug('Cellphones and accessories'),
                'color' => true
            ],
            [
                'category_id' => 1,
                'name' => 'Smartwatches',
                'slug' => Str::slug('Smartwatches'),
                'color' => true
            ],
            [
                'category_id' => 2,
                'name' => 'TV and audio',
                'slug' => Str::slug('TV and audio'),
                'color' => true
            ],
            [
                'category_id' => 2,
                'name' => 'Audio',
                'slug' => Str::slug('Audio'),
                'color' => true
            ],
            [
                'category_id' => 2,
                'name' => 'Card Audio',
                'slug' => Str::slug('Card Audio'),
                'color' => true
            ],
            //consola y videojuegos
            [
                'category_id' => 3,
                'name' => 'Xbox',
                'slug' => Str::slug('Xbox'),
                'color' => false
            ],
            [
                'category_id' => 3,
                'name' => 'Play Station',
                'slug' => Str::slug('Play Station'),
                'color' => false
            ],
            [
                'category_id' => 3,
                'name' => 'PC games',
                'slug' => Str::slug('PC games'),
                'color' => false
            ],
            [
                'category_id' => 3,
                'name' => 'Nintendo',
                'slug' => Str::slug('Nintendo'),
                'color' => false
            ],
            //computacion
            [
                'category_id' => 4,
                'name' => 'Laptop',
                'slug' => Str::slug('Laptop'),
                'color' => true
            ],
            [
                'category_id' => 4,
                'name' => 'PC desktop',
                'slug' => Str::slug('PC desktop'),
                'color' => true
            ],
            [
                'category_id' => 4,
                'name' => 'Storage',
                'slug' => Str::slug('Storage'),
                'color' => true
            ],
            [
                'category_id' => 4,
                'name' => 'Computer accessories',
                'slug' => Str::slug('Computer accessories'),
                'color' => true
            ],
           //men women agregar size => true
           [
            'category_id' => 5,
            'name' => 'Women',
            'slug' => Str::slug('Women'),
            'color' => true,
            'size' => true
            ],
            [
                'category_id' => 5,
                'name' => 'Men',
                'slug' => Str::slug('Men'),
                'color' => true,
                'size' => true
            ],
            [
                'category_id' => 5,
                'name' => 'Watch',
                'slug' => Str::slug('Watch'),
                'color' => true,
                'size' => true
            ],
            [
                'category_id' => 5,
                'name' => 'Glasses',
                'slug' => Str::slug('Glasses'),
                'color' => true,
                'size' => true
            ],
        ];

        foreach($subcategories as $subcategory){
            Subcategory::factory(1)->create($subcategory);
        }
    }
}
