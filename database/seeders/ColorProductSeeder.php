<?php

namespace Database\Seeders;
use App\Models\Product;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Contracts\Database;


class ColorProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $products = Product::whereHas('Subcategory', function(Builder $query){
            $query->where('color', true)
            ->where('size', false);
        })->get();

        foreach($products as $product){
            $product->colors()->attach([
                1=>['quantity' => 10],
                2=>['quantity' => 10],
                3=>['quantity' => 10],
                4=>['quantity' => 10]

            ]);
        }
    }
}
