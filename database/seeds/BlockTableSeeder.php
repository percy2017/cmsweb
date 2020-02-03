<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Block;

class BlockTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
  
        Block::create([
            'name'        => 'lps_block1',
            'title'       => 'Blocke #1 (features)',
            'description' => 'Seccion Features para la plantilla LPS',
            'template_id' => 1,
            'position'    => 1,
            'details'     => json_encode([
                'title_strong' => [
                    'type'   => 'text',
                    'name'   => 'title_strong',
                    'label'  => 'Titulo en Negrita',
                    'value'  => 'Lorem ipsum',
                    'width'  => 6
                ],
                'title_default' => [
                    'type'  => 'text',
                    'name'  => 'title_default',
                    'label' => 'Titulo Normal',
                    'value' => 'dolor sit amet',
                    'width'  => 6
                ],
                'description' => [
                    'type'  => 'text_area',
                    'name'  => 'description',
                    'label' => 'Descripcion',
                    'value' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum quas, eos officia maiores ipsam ipsum dolores reiciendis ad voluptas, animi obcaecati adipisci sapiente mollitia.',
                    'width'  => 12
                ],
                'icons1' => [
                    'type'  => 'text',
                    'name'  => 'icons1',
                    'label' => 'Icon #1',
                    'value' => 'fas fa-cogs blue-text',
                    'width'  => 2
                ],
                'title1' => [
                    'type'  => 'text',
                    'name'  => 'title1',
                    'label' => 'Title #1',
                    'value' => 'Customization',
                    'width'  => 3
                ],
                'descripcion1' => [
                    'type'  => 'text_area',
                    'name'  => 'description1',
                    'label' => 'Descripcion #1',
                    'value' => 'Lorem Ipsum is simply dummy text of the printing and typesetting let. Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                    'width' => 7
                ],
                'icons2' => [
                    'type'  => 'text',
                    'name'  => 'icons2',
                    'label' => 'Icon #2',
                    'value' => 'fas fa-book blue-text',
                    'width' => 2
                ],
                'title2' => [
                    'type'  => 'text',
                    'name'  => 'title2',
                    'label' => 'Title #2',
                    'value' => 'Easy tutorials',
                    'width' => 3
                ],
                'descripcion2' => [
                    'type'  => 'text_area',
                    'name'  => 'descripcion2',
                    'label' => 'Descripcion #2',
                    'value' => 'Lorem Ipsum is simply dummy text of the printing and typesetting let. Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                    'width' => 7
                ],
                'icons3' => [
                    'type'  => 'text',
                    'name'  => 'icons3',
                    'label' => 'Icon #3',
                    'value' => 'fas fa-users blue-text',
                    'width' => 2
                ],
                'title3' => [
                    'type'  => 'text',
                    'name'  => 'title3',
                    'label' => 'Title #3',
                    'value' => 'Easy tutorials',
                    'width' => 3
                ],
                'descripcion3' => [
                    'type'  => 'text_area',
                    'name'  => 'descripcion3',
                    'label' => 'Descripcion #3',
                    'value' => 'Lorem Ipsum is simply dummy text of the printing and typesetting let. Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                    'width' => 7
                ]
            ])
        ]);

        Block::create([
            'name'        => 'lps_block2',
            'title'       => 'Blocke #2 (downlonad)',
            'description' => 'Seccion Download para la plantilla LPS',
            'template_id' => 1,
            'position'    => 2,
            'details'     =>  json_encode([
                'image_donwload' => [
                    'type'   => 'image',
                    'name'   => 'image_donwload',
                    'label'  => 'Image Donwload',
                    'value'  => '',
                    'width'  => 4
                ],
                'title_strong' => [
                    'type'   => 'text',
                    'name'   => 'title_strong',
                    'label'  => 'Titulo en Negrita',
                    'value'  => 'Lorem ipsum',
                    'width'  => 4
                ],
                'title_default' => [
                    'type'  => 'text',
                    'name'  => 'title_default',
                    'label' => 'Titulo Normal',
                    'value' => 'dolor sit amet',
                    'width'  => 4
                ],
                'desription' => [
                    'type'  => 'text_area',
                    'name'  => 'description',
                    'label' => 'Descripcion',
                    'value' => 'Lorem Ipsum is simply dummy text of the printing and typesetting let. Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                    'width'  => 12
                ],
                'button1' => [
                    'type'  => 'text',
                    'name'  => 'button1',
                    'label' => 'Texto del Boton Android',
                    'value' => 'PLAY STORE',
                    'width'  => 6
                ],
                'button2' => [
                    'type'  => 'text',
                    'name'  => 'button2',
                    'label' => 'Texto del Boton Apple',
                    'value' => 'APP STORE',
                    'width'  => 6
                ]
            ])
        ]);
    }
}
