<?php

use Illuminate\Database\Seeder;
use App\ProductCategorie;
class ProductCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductCategorie::create([
            'name' => 'Category Prueba',
            'slug' => 'category-prueba'
        ]); 
    }
}
