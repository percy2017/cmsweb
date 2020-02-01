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
            'template_id' => 1,
            'position'    => 1,
            'details'     => json_encode([
                'title_strong' => 'Mi titulo',
                'title'        => 'Titulo default 1',
                'descripcion'  => 'Descripcion del blocke #1',
                'icons' => [
                    'icons1' => [
                        'icon'        => 'fas fa-cogs blue-text',
                        'title'       => 'Titulo #1',
                        'descripcion' => 'Descripcion #1'
                    ],
                    'icons2' => [
                        'icon'        => 'fas fa-users blue-text',
                        'title'       => 'Titulo #2',
                        'descripcion' => 'Descripcion #2'
                    ],
                    'icons3' => [
                        'icon'        => 'fas fa-book blue-text',
                        'title'       => 'Titulo #3',
                        'descripcion' => 'Descripcion #3'
                    ]
                ]
                // "object1" => [
                //     "name" => "titulo_strong",
                //     "type" => "text"
                // ],
                // "object2" => [
                //     "name" => "titulo_default",
                //     "type" => "text"
                // ],
                // "object3" => [
                //     "name" => "parrafo_default",
                //     "type" => "text_area"
                // ]
            ]),
        ]);

        Block::create([
            'name'        => 'lps_block2',
            'template_id' => 1,
            'position'    => 2,
            'details'     => json_encode([
                'image'        => '',
                'title_strong' => 'Titulo Strong',
                'title'        => ' Titulo default',
                'descripcion'  => 'Lorem Ipsum is simply dummy text of the printing and typesetting let.',

                'button1'      => [
                    'name'     => 'Play store',
                    'icon'     => 'fab fa-android pr-2',
                    'action'   => '#'
                ],

                'button2'      => [
                    'name'     => 'App store',
                    'icon'     => 'fab fa-apple pr-2',
                    'action'   => '#'
                ]
            ]),

        ]);

        Block::create([
            'name'        => 'lps_block3',
            'template_id' => 1,
            'position'    => 3,
            'details'     => json_encode([
                'image'        => '',
                'title_strong' => 'Titulo Strong',
                'title'        => ' Titulo default',
                'image'        => '',
                'descriptions'=>[

                    'description1' => [
                        'title'     => 'Fully responsive',
                        'icon'     => 'fas fa-tablet-alt blue-text',
                        'text'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores.'
                    ],

                    'description2' => [
                        'title'    => 'Frequent updates',
                        'icon'     => 'fas fa-level-up-alt blue-text',
                        'text'     => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores.'
                    ],

                    'description3' => [
                        'title'    => 'Technical support',
                        'icon'     => 'fas fa-phone blue-text',
                        'text'     => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores.'
                    ],

                    'description4' => [
                        'title'    => 'Editable layout',
                        'icon'     => 'far fa-object-group blue-text',
                        'text'     => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores.'
                    ],

                    'description5' => [
                        'title'    => 'Fast and powerful',
                        'icon'     => 'fas fa-rocket blue-text',
                        'text'     => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores.'
                    ],
                    'description6' => [
                        'title'    => 'Cloud storage',
                        'icon'     => 'fas fa-cloud-upload-alt blue-text',
                        'text'     => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores.'
                    ]
                ]
            ]),

        ]);
    }
}
