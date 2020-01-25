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
            'description' => 'Pagina de Destino para negocios de Software.',
            'description_lang' => '',
            'default' => 1,
            'image' => 'vendor/admin/images/admin-new.png',
            'category_id' => 'Landing Page',
        ]); 

        Template::create([
            'name' => 'Landing Page Restorant',
            'name_short' => 'LPR',
            'description' => 'Pagina de Destino para negocios de Restorant.',
            'description_lang' => '',
            'default' => 1,
            'image' => 'vendor/admin/images/food.jpg',
            'category_id' => 'Landing Page',
        ]); 

        Template::create([
            'name' => 'Landing Page Medical',
            'name_short' => 'LPM',
            'description' => 'Pagina de Destino para Hospitales, Clinicas.',
            'description_lang' => '',
            'default' => 1,
            'image' => 'vendor/admin/images/medical.jpg',
            'category_id' => 'Landing Page',
        ]); 

        Template::create([
            'name' => 'Landing Page Eventos',
            'name_short' => 'LPE',
            'description' => 'Pagina de Destino para Eventos Sociales.',
            'description_lang' => '',
            'default' => 1,
            'image' => 'vendor/admin/images/event.jpg',
            'category_id' => 'Landing Page',
        ]); 

        Template::create([
            'name' => 'Landing Page Band',
            'name_short' => 'LPB',
            'description' => 'Pagina de Destino para Grupo Musicales.',
            'description_lang' => '',
            'default' => 1,
            'image' => 'vendor/admin/images/band.jpg',
            'category_id' => 'Landing Page',
        ]); 

        Template::create([
            'name' => 'Landing Page Hotel',
            'name_short' => 'LPH',
            'description' => 'Pagina de Destino para hoteles o Residenciales.',
            'description_lang' => '',
            'default' => 1,
            'image' => 'vendor/admin/images/hotel.jpg',
            'category_id' => 'Landing Page',
        ]); 

        Template::create([
            'name' => 'Landing Page Contruccion',
            'name_short' => 'LPC',
            'description' => 'Pagina de Destino para Empresas Civiles.',
            'description_lang' => '',
            'default' => 1,
            'image' => 'vendor/admin/images/construccion.jpg',
            'category_id' => 'Landing Page',
        ]); 


        // ---------- ECOMMERCE ------------
        // --------------------------------
        Template::create([
            'name' => 'E-Commerce MDB v1',
            'name_short' => 'EC1',
            'description' => 'Tinda en linea - Ecommerce Tipo MDB v1.',
            'description_lang' => '',
            'default' => 1,
            'image' => 'vendor/admin/images/ecommerce1.png',
            'category_id' => 'E-Commerce',
        ]); 

        Template::create([
            'name' => 'E-Commerce MDB v2',
            'name_short' => 'EC2',
            'description' => 'Tinda en linea - Ecommerce Tipo MDB v2.',
            'description_lang' => '',
            'default' => 1,
            'image' => 'vendor/admin/images/ecommerce2.png',
            'category_id' => 'E-Commerce',
        ]);

        Template::create([
            'name' => 'E-Commerce MDB v3',
            'name_short' => 'EC3',
            'description' => 'Tinda en linea - Ecommerce Tipo MDB v3.',
            'description_lang' => '',
            'default' => 1,
            'image' => 'vendor/admin/images/ecommerce3.png',
            'category_id' => 'E-Commerce',
        ]);
    }
}
