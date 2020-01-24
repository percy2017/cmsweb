<?php

use Illuminate\Database\Seeder;
use App\Template;
class TemplatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Template::create([
            'name' => 'Landing Page Software',
            'name_short' => 'LPS',
            'description' => 'Pagina de Destino para negocios de Software o similares',
            'description_lang' => '',
            'default' => 1,
            'image' => '/resources/admin-new.png',
            'category_id' => 'Landing Page',
        ]); 

        Template::create([
            'name' => 'Landing Page Restorant',
            'name_short' => 'LPR',
            'description' => 'Pagina de Destino para negocios de Restorant y Venta de Comida Rapida',
            'description_lang' => '',
            'default' => 1,
            'image' => '',
            'category_id' => 'Landing Page',
        ]); 
    }
}
