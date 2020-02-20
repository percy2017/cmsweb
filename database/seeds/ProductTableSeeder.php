<?php

use Illuminate\Database\Seeder;
use App\Product;
class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name'          => 'Product Name',
            'slug'          => 'product-name',
            'user_id'       => 1,
            'categorie_id'  => 1
        ]); 
    }
}
