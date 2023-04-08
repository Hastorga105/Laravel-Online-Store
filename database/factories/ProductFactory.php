<?php

namespace Database\Factories;
//use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        //Generar una marca (brand)
        $name = $this->faker->sentence(2);
        //generar brands and asignar random
        $subcategory = Subcategory::all()->random();
        //obtener la categoria y asignarla a la marca
        $category = $subcategory->category;
        //seleccionar la categoria y relacionarla con la marca
        $brands = $category->brands->random();

        if($subcategory->color){
            $quantity = null;
        }
        else{
            $quantity = 15;
        }


        return [
            //
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => $this->faker->text(),
            'price' => $this->faker->randomElement([19.99, 49.99, 99.99]),
            'subcategory_id' =>$subcategory->id,
            'brand_id' => $brands->id,
            'quantity' => $quantity,
            'status' => 2
        ];
    }
}
