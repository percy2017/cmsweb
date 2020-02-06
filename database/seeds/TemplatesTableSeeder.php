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

        // Landng Page---------------
        // -------------------------
        Template::create([
            'name' => 'Landing Page Software',
            'slug' => 'landing-page-software',
            'name_short' => 'LPS',
            'description' => 'Pagina de Destino para negocios de Software.',
            'image' => 'vendor/admin/images/admin-new.png',
            'category_id' => 'Landing Page',
        ]); 

        Template::create([
            'name' => 'Landing Page Restorant',
            'slug' => 'landing-page-restorant',
            'name_short' => 'LPR',
            'description' => 'Pagina de Destino para negocios de Restorant.',
            'image' => 'vendor/admin/images/food.jpg',
            'category_id' => 'Landing Page',
        ]); 

        Template::create([
            'name' => 'Landing Page Medical',
            'slug' => 'landing-page-medical',
            'name_short' => 'LPM',
            'description' => 'Pagina de Destino para Hospitales, Clinicas.',
            'image' => 'vendor/admin/images/medical.jpg',
            'category_id' => 'Landing Page',
        ]); 

        Template::create([
            'name' => 'Landing Page Eventos',
            'slug' => 'landing-page-events',
            'name_short' => 'LPE',
            'description' => 'Pagina de Destino para Eventos Sociales.',
            'image' => 'vendor/admin/images/event.jpg',
            'category_id' => 'Landing Page',
        ]); 

        Template::create([
            'name' => 'Landing Page Band',
            'slug' => 'landing-page-band',
            'name_short' => 'LPB',
            'description' => 'Pagina de Destino para Grupo Musicales.',
            'image' => 'vendor/admin/images/band.jpg',
            'category_id' => 'Landing Page',
        ]); 

        Template::create([
            'name' => 'Landing Page Hotel',
            'slug' => 'landing-page-hotel',
            'name_short' => 'LPH',
            'description' => 'Pagina de Destino para hoteles o Residenciales.',
            'image' => 'vendor/admin/images/hotel.jpg',
            'category_id' => 'Landing Page',
        ]); 

        Template::create([
            'name' => 'Landing Page Contruccion',
            'slug' => 'landing-page-contruccion',
            'name_short' => 'LPC',
            'description' => 'Pagina de Destino para Empresas Civiles.',
            'image' => 'vendor/admin/images/construccion.jpg',
            'category_id' => 'Landing Page',
        ]); 

        Template::create([
            'name' => 'Landing Page Travel',
            'slug' => 'landing-page-travel',
            'name_short' => 'LPT',
            'description' => 'Pagina de Destino para Turismo o Travel.',
            'image' => 'vendor/admin/images/travel.png',
            'category_id' => 'Landing Page',
        ]); 

        Template::create([
            'name' => 'Landing Page University',
            'slug' => 'landing-page-university',
            'name_short' => 'LPU',
            'description' => 'Pagina de Destino para Colegios y Universidades.',
            'image' => 'vendor/admin/images/university.png',
            'category_id' => 'Landing Page',
        ]); 

        Template::create([
            'name' => 'Landing Page Cafe',
            'slug' => 'landing-page-cafe',
            'name_short' => 'LPF',
            'description' => 'Pagina de Destino para Negocios de Cafe Bar.',
            'image' => 'vendor/admin/images/cafe.png',
            'category_id' => 'Landing Page',
        ]); 

        Template::create([
            'name' => 'Landing Page Agencia',
            'slug' => 'landing-page-agencia',
            'name_short' => 'LPV',
            'description' => 'Pagina de Destino para Empresa de Marketing.',
            'image' => 'vendor/admin/images/marketing.png',
            'category_id' => 'Landing Page',
        ]);

        Template::create([
            'name' => 'Landing Page SPA',
            'slug' => 'landing-page-spa',
            'name_short' => 'LPP',
            'description' => 'Pagina de Destino para Negocios de SPA.',
            'image' => 'vendor/admin/images/spa.png',
            'category_id' => 'Landing Page',
        ]);

        Template::create([
            'name' => 'Landing Page Transporte',
            'slug' => 'landing-page-transporte',
            'name_short' => 'LPA',
            'description' => 'Pagina de Destino para servicios de Transportes.',
            'image' => 'vendor/admin/images/transporte.png',
            'category_id' => 'Landing Page',
        ]);

        Template::create([
            'name' => 'Landing Page Multi Uso',
            'slug' => 'landing-page-multiuso',
            'name_short' => 'LPI',
            'description' => 'Pagina de Destino para Multi Uso.',
            'image' => 'vendor/admin/images/multiuso.png',
            'category_id' => 'Landing Page',
        ]);



        // ---------- ECOMMERCE ------------
        // --------------------------------
        Template::create([
            'name' => 'E-Commerce MDB v1',
            'slug' => 'ecommerce-mbd-v1',
            'name_short' => 'EC1',
            'description' => 'Tinda en linea - Ecommerce Tipo MDB v1.',
            'image' => 'vendor/admin/images/ecommerce1.png',
            'category_id' => 'E-Commerce',
        ]); 

        Template::create([
            'name' => 'E-Commerce MDB v2',
            'slug' => 'ecommerce-mbd-v2',
            'name_short' => 'EC2',
            'description' => 'Tinda en linea - Ecommerce Tipo MDB v2.',
            'image' => 'vendor/admin/images/ecommerce2.png',
            'category_id' => 'E-Commerce',
        ]);

        Template::create([
            'name' => 'E-Commerce MDB v3',
            'slug' => 'ecommerce-mbd-v3',
            'name_short' => 'EC3',
            'description' => 'Tinda en linea - Ecommerce Tipo MDB v3.',
            'image' => 'vendor/admin/images/ecommerce3.png',
            'category_id' => 'E-Commerce',
        ]);


        
        // Default -----------------
        Template::create([
            'name' => 'Layout Default',
            'slug' => 'default',
            'name_short' => 'default',
            'description' => 'Layout default del CmsWeb',
            'image' => 'default.png',
            'category_id' => 'Landing Page',
        ]); 

             // Default -----------------
             Template::create([
                'name' => 'Layout Maps',
                'slug' => 'maps',
                'name_short' => 'maps',
                'description' => 'Layout Maps del CmsWeb',
                'image' => 'default.png',
                'category_id' => 'Landing Page',
            ]); 
        
    }
}
