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
            'title'       => 'Blocke #1 (features #1)',
            'description' => 'Seccion Features #1 para la plantilla LPS',
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
                    'value' => 'Lorem ipsum dolor sit amet, consectetur dipisicing elit. Laborum quas, eos officia maiores ipsam ipsum dolores reiciendis ad voluptas, animi obcaecati adipisci sapiente mollitia.',
                    'width'  => 12
                ],
                'icons1' => [
                    'type'  => 'select_dropdown',
                    'name'  => 'icons1',
                    'label' => 'Icon #1',
                    'value' => 'fas fa-cogs blue-text',
                    'width'  => 3
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
                    'value' => 'Lorem Ipsum is simply dummy text o the printing and typesetting let. Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                    'width' => 6
                ],
                'icons2' => [
                    'type'  => 'select_dropdown',
                    'name'  => 'icons2',
                    'label' => 'Icon #2',
                    'value' => 'fas fa-book blue-text',
                    'width' => 3
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
                    'value' => 'Lorem Ipsum is simply dummy text of the printing and typesetting le Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                    'width' => 6
                ],
                'icons3' => [
                    'type'  => 'select_dropdown',
                    'name'  => 'icons3',
                    'label' => 'Icon #3',
                    'value' => 'fas fa-users blue-text',
                    'width' => 3
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
                    'value' => 'Lorem Ipsum is simply dummy text of the printing typesetting let. Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                    'width' => 6
                ]
            ])
        ]);

        Block::create([
            'name'        => 'lps_block2',
            'title'       => 'Blocke #2 (downlonad)',
            'description' => 'Seccion Download para la plantilla LPS',
            'template_id' => 1,
            'position'    => 2,
            'details'     => json_encode([
                'image_donwload' => [
                    'type'   => 'image',
                    'name'   => 'image_donwload',
                    'label'  => 'Image Donwload',
                    'value'  => 'defualt.png',
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


        Block::create([
            'name'        => 'lps_block3',
            'title'       => 'Blocke #3 (features #2)',
            'description' => 'Seccion Features #2 para la plantilla LPS',
            'template_id' => 1,
            'position'    => 3,
            'details'     => json_encode([
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
                'image_principal' => [
                    'type'   => 'image',
                    'name'   => 'image_principal',
                    'label'  => 'Image Princiapal,',
                    'value'  => 'default.png',
                    'width'  => 4
                ],
                'icons1' => [
                    'type'   => 'select_dropdown',
                    'name'   => 'icons1',
                    'label'  => 'Icons #1',
                    'value'  => 'fas fa-tablet-alt blue-text',
                    'width'  => 4
                ],
                'title1' => [
                    'type'   => 'text',
                    'name'   => 'title1',
                    'label'  => 'Titulo #1',
                    'value'  => 'Fully responsive',
                    'width'  => 4
                ],
                'description1' => [
                    'type'   => 'text_area',
                    'name'   => 'description1',
                    'label'  => 'Descripcion #1',
                    'value'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores',
                    'width'  => 4
                ],
                'icons2' => [
                    'type'   => 'select_dropdown',
                    'name'   => 'icons2',
                    'label'  => 'Icons #2',
                    'value'  => 'fas fa-level-up-alt blue-text',
                    'width'  => 4
                ],
                'title2' => [
                    'type'   => 'text',
                    'name'   => 'title2',
                    'label'  => 'Titulo #2',
                    'value'  => 'Frequent updates',
                    'width'  => 4
                ],
                'description2' => [
                    'type'   => 'text_area',
                    'name'   => 'description2',
                    'label'  => 'Descripcion #2',
                    'value'  => 'Lorem ipsum dolor sit amet, consectetu adipisicing elit. Reprehenderit maiores',
                    'width'  => 4
                ],
                'icons3' => [
                    'type'   => 'select_dropdown',
                    'name'   => 'icons3',
                    'label'  => 'Icons #3',
                    'value'  => 'fas fa-phone blue-text',
                    'width'  => 4
                ],
                'title3' => [
                    'type'   => 'text',
                    'name'   => 'title3',
                    'label'  => 'Titulo #3',
                    'value'  => 'Technical support',
                    'width'  => 4
                ],
                'description3' => [
                    'type'   => 'text_area',
                    'name'   => 'description3',
                    'label'  => 'Descripcion #3',
                    'value'  => 'Lorem ipsum dolr sit amet, consectetu adipisicing elit. Reprehderit maiores',
                    'width'  => 4
                ],
                'icons4' => [
                    'type'   => 'select_dropdown',
                    'name'   => 'icons4',
                    'label'  => 'Icons #4',
                    'value'  => 'far fa-object-group blue-text',
                    'width'  => 4
                ],
                'title4' => [
                    'type'   => 'text',
                    'name'   => 'title4',
                    'label'  => 'Titulo #4',
                    'value'  => 'Editable layout',
                    'width'  => 4
                ],
                'description4' => [
                    'type'   => 'text_area',
                    'name'   => 'description4',
                    'label'  => 'Descripcion #4',
                    'value'  => 'Lorem ipsum dolr sit amet, conectetu adipisicing elit. Reprehderit maiores',
                    'width'  => 4
                ],
                'icons5' => [
                    'type'   => 'select_dropdown',
                    'name'   => 'icons5',
                    'label'  => 'Icons #5',
                    'value'  => 'fas fa-rocket blue-text',
                    'width'  => 4
                ],
                'title5' => [
                    'type'   => 'text',
                    'name'   => 'title5',
                    'label'  => 'Titulo #5',
                    'value'  => 'Fast and powerful',
                    'width'  => 4
                ],
                'description5' => [
                    'type'   => 'text_area',
                    'name'   => 'description5',
                    'label'  => 'Descripcion #5',
                    'value'  => 'Lorem ipsum dolr sit amet, conectetu adipisicing elit. Reprehderit maioress.',
                    'width'  => 4
                ],
                'icons6' => [
                    'type'   => 'select_dropdown',
                    'name'   => 'icons6',
                    'label'  => 'Icons #6',
                    'value'  => 'fas fa-cloud-upload-alt blue-text',
                    'width'  => 4
                ],
                'title6' => [
                    'type'   => 'text',
                    'name'   => 'title6',
                    'label'  => 'Titulo #6',
                    'value'  => 'Fast and powerful',
                    'width'  => 4
                ],
                'description6' => [
                    'type'   => 'text_area',
                    'name'   => 'description6',
                    'label'  => 'Descripcion #6',
                    'value'  => 'Lorem isum dolr sit amet, conectetu adipisicing elit. Reprehderit maioress.',
                    'width'  => 4
                ],
            ])
        ]);

        Block::create([
            'name'        => 'lps_block4',
            'title'       => 'Blocke # (Prices)',
            'description' => 'Seccion Prices para la plantilla LPS',
            'template_id' => 1,
            'position'    => 4,
            'details'     => json_encode([
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
                'description' => [
                    'type'  => 'text_area',
                    'name'  => 'description',
                    'label' => 'Descripcion',
                    'value' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam',
                    'width'  => 4
                ],
                'icons1' => [
                    'type'   => 'select_dropdown',
                    'name'   => 'icons1',
                    'label'  => 'Icons #1',
                    'value'  => 'fas fa-home blue-text',
                    'width'  => 2
                ],
                'title1' => [
                    'type'   => 'text',
                    'name'   => 'title1',
                    'label'  => 'Titulo #1',
                    'value'  => 'Basic plan',
                    'width'  => 2
                ],
                'price1' => [
                    'type'   => 'text',
                    'name'   => 'price1',
                    'label'  => 'Precio #1',
                    'value'  => '59 $',
                    'width'  => 2
                ],
                'button1' => [
                    'type'   => 'text',
                    'name'   => 'button1',
                    'label'  => 'Accion del Boton #1',
                    'value'  => '#',
                    'width'  => 2
                ],
                'description1' => [
                    'type'   => 'text_area',
                    'name'   => 'description1',
                    'label'  => 'Descripcion #1',
                    'value'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa pariatur id nobis accusamus deleniti cumque hic laborum.',
                    'width'  => 4
                ],
                'icons2' => [
                    'type'   => 'select_dropdown',
                    'name'   => 'icons2',
                    'label'  => 'Icons #2',
                    'value'  => 'fas fa-users white-text',
                    'width'  => 2
                ],
                'title2' => [
                    'type'   => 'text',
                    'name'   => 'title2',
                    'label'  => 'Titulo #2',
                    'value'  => 'Premium plan',
                    'width'  => 2
                ],
                'price2' => [
                    'type'   => 'text',
                    'name'   => 'price2',
                    'label'  => 'Precio #2',
                    'value'  => '79 $',
                    'width'  => 2
                ],
                'button2' => [
                    'type'   => 'text',
                    'name'   => 'button2',
                    'label'  => 'Accion del Boton #2',
                    'value'  => '#',
                    'width'  => 2
                ],
                'description2' => [
                    'type'   => 'text_area',
                    'name'   => 'description2',
                    'label'  => 'Descripcion #2',
                    'value'  => 'Lorem ipsum dol sit amet, consectetur adipisicing elit. Culpa pariatur id nobis accusamus deleniti cumque hic laborum.',
                    'width'  => 4
                ],
                'icons3' => [
                    'type'   => 'select_dropdown',
                    'name'   => 'icons3',
                    'label'  => 'Icons #3',
                    'value'  => 'fas fa-chart-bar blue-text',
                    'width'  => 2
                ],
                'title3' => [
                    'type'   => 'text',
                    'name'   => 'title3',
                    'label'  => 'Titulo #3',
                    'value'  => 'Advanced plan',
                    'width'  => 2
                ],
                'price3' => [
                    'type'   => 'text',
                    'name'   => 'price3',
                    'label'  => 'Precio #3',
                    'value'  => '99 $',
                    'width'  => 2
                ],
                'button3' => [
                    'type'   => 'text',
                    'name'   => 'button2',
                    'label'  => 'Accion del Boton #3',
                    'value'  => '#',
                    'width'  => 2
                ],
                'description3' => [
                    'type'   => 'text_area',
                    'name'   => 'description3',
                    'label'  => 'Descripcion #3',
                    'value'  => 'Loem ipsum dol sit amet, consectetur adipisicing elit. Culpa pariatur id nobis accusamus deleniti cumque hic laborum.',
                    'width'  => 4
                ]
            ])
        ]);

        //----------------------------------------------------------------            
        //bloque para LPR-------------------------------------------------- 
        //-----------------------------------------------------------------
         
        Block::create([
            'name'        => 'lpr_block1',
            'title'       => 'Blocke #1 (about us)',
            'description' => 'Seccion about us para la plantilla LPR',
            'template_id' => 2,
            'position'    => 1,
            'details'     => json_encode([
                'title_strong' => [
                    'type'   => 'text',
                    'name'   => 'title_strong',
                    'label'  => 'Titulo en Negrita',
                    'value'  => 'ABOUT US',
                    'width'  => 6
                ],
                'image' => [
                    'type'  => 'image',
                    'name'  => 'image',
                    'label' => 'Logo del Restaurant',
                    'value' => 'default.png',
                    'width' => 6
                ],
                'title_default' => [
                    'type'  => 'text',
                    'name'  => 'title_default',
                    'label' => 'Titulo Default',
                    'value' => 'We make good food and friendly atmosphere',
                    'width' => 6
                ],
                'description1' => [
                    'type'   => 'text_area',
                    'name'   => 'description1',
                    'label'  => 'Descripcion #1',
                    'value'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa pariatur id nobis accusamus deleniti cumque hic laborum.',
                    'width'  => 6
                ]
            ])
        ]);

        Block::create([
            'name'        => 'lpr_block2',
            'title'       => 'Blocke #2 (Streak)',
            'description' => 'Seccion Streak para la plantilla LPR',
            'template_id' => 2,
            'position'    => 2,
            'details'     => json_encode([
                'title_default' => [
                    'type'   => 'text',
                    'name'   => 'title_default',
                    'label'  => 'Titulo en default',
                    'value'  => 'Food for the body is not enough. There must be food for the soul.',
                    'width'  => 4
                ],
                'image' => [
                    'type'  => 'image',
                    'name'  => 'image',
                    'label' => 'image treak',
                    'value' => 'default.png',
                    'width'  => 4
                ],
                'title_normal' => [
                    'type'  => 'text',
                    'name'  => 'text_normal',
                    'label' => 'texto normal',
                    'value' => '~ Dorothy Day',
                    'width'  => 4
                ]
            ])
        ]);

        Block::create([
            'name'        => 'lpr_block3',
            'title'       => 'Blocke #3 (DISCOVER)',
            'description' => 'Seccion DISCOVER para la plantilla LPR',
            'template_id' => 2,
            'position'    => 3,
            'details'     => json_encode([
                'title_strong' => [
                    'type'   => 'text',
                    'name'   => 'title_strong',
                    'label'  => 'Titulo en Negrita',
                    'value'  => 'DISCOVER OUR DELIGHTS',
                    'width'  => 4
                ],
                'title_default' => [
                    'type'  => 'text',
                    'name'  => 'title_default',
                    'label' => 'Titulo Normal',
                    'value' => 'All European cuisine in one place',
                    'width'  => 4
                ],
                'description' => [
                    'type'  => 'text_area',
                    'name'  => 'description',
                    'label' => 'Descripcion',
                    'value' => 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molstias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fug',
                    'width'  => 4
                ],
                'button' => [
                    'type'   => 'text',
                    'name'   => 'button',
                    'label'  => 'Accion  del Boton',
                    'value'  => '#menu',
                    'width'  => 4
                ],
                'button_title' => [
                    'type'   => 'text',
                    'name'   => 'button_title',
                    'label'  => 'Titulo del Boton',
                    'value'  => 'SEE FULL MENU',
                    'width'  => 4
                ],
                'image' => [
                    'type'   => 'image',
                    'name'   => 'image',
                    'label'  => 'imagen de la Sección',
                    'value'  => 'Defaulf.png',
                    'width'  => 4
                ]
            ])
        ]);

        Block::create([
            'name'        => 'lpr_block4',
            'title'       => 'Blocke #4 (OUR SPECIALS)',
            'description' => 'Seccion OUR SPECIALS para la plantilla LPR',
            'template_id' => 2,
            'position'    => 4,
            'details'     => json_encode([
                'title_strong' => [
                    'type'   => 'text',
                    'name'   => 'title_strong',
                    'label'  => 'Titulo en Negrita',
                    'value'  => 'OUR SPECIALS',
                    'width'  => 6
                ],
                'description' => [
                    'type'  => 'text_area',
                    'name'  => 'description',
                    'label' => 'Descripcion',
                    'value' => 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique.',
                    'width'  => 6
                ],
                'card1_title' => [
                    'type'   => 'text',
                    'name'   => 'card1_title',
                    'label'  => 'card 1 titulo',
                    'value'  => 'Breakfast',
                    'width'  => 6
                ],
                'card1_image' => [
                    'type'   => 'image',
                    'name'   => 'card1_image',
                    'label'  => 'card 1 Imagen',
                    'value'  => 'default1.png',
                    'width'  => 6
                ],
                'card2_title' => [
                    'type'   => 'text',
                    'name'   => 'card2_title',
                    'label'  => 'card 2 titulo',
                    'value'  => 'Launches',
                    'width'  => 6
                ],
                'card2_image' => [
                    'type'   => 'image',
                    'name'   => 'card2_image',
                    'label'  => 'card 2 Imagen',
                    'value'  => 'default2.png',
                    'width'  => 6
                ],
                'card3_title' => [
                    'type'   => 'text',
                    'name'   => 'card3_title',
                    'label'  => 'card 3 titulo',
                    'value'  => 'Desserts',
                    'width'  => 6
                ],
                'card3_image' => [
                    'type'   => 'image',
                    'name'   => 'card3_image',
                    'label'  => 'card 3 Imagen',
                    'value'  => 'default3.png',
                    'width'  => 6
                ]
            ])
        ]);

/*         Block::create([
            'name'        => 'lpr_block5',
            'title'       => 'Blocke #5 (Streak 2)',
            'description' => 'Seccion Streak 2 para la plantilla LPR',
            'template_id' => 2,
            'position'    => 5,
            'details'     => json_encode([
                'title_strong' => [
                    'type'   => 'text',
                    'name'   => 'title_strong',
                    'label'  => 'Titulo en Negrita',
                    'value'  => 'GREAT PEOPLE TRUSTED OUR SERVICES',
                    'width'  => 6
                ],
                'image' => [
                    'type'  => 'image',
                    'name'  => 'image',
                    'label' => 'imagen de Fondo',
                    'value' => 'default.png',
                    'width'  => 6
                ],
                'services1_number' => [
                    'type'  => 'text',
                    'name'  => 'services1_number',
                    'label' => 'numero entero',
                    'value' => '+950',
                    'width'  => 3
                ],
                'services2_number' => [
                    'type'  => 'text',
                    'name'  => 'services2_number',
                    'label' => 'numero entero',
                    'value' => '+150',
                    'width'  => 3
                ],
                'services3_number' => [
                    'type'  => 'text',
                    'name'  => 'services3_number',
                    'label' => 'numero entero',
                    'value' => '+85',
                    'width'  => 3
                ],
                'services4_number' => [
                    'type'  => 'text',
                    'name'  => 'services4_number',
                    'label' => 'numero entero',
                    'value' => '+246',
                    'width'  => 3
                ],
                'services1_title'  => [
                    'type'   => 'text',
                    'name'   => 'services1_title',
                    'label'  => 'Titulo',
                    'value'  => 'Happy clients',
                    'width'  => 3
                ],
                'services2_title'  => [
                    'type'   => 'text',
                    'name'   => 'services2_title',
                    'label'  => 'Titulo',
                    'value'  => 'Projects completed',
                    'width'  => 3
                ],
                'services3_title'  => [
                    'type'   => 'text',
                    'name'   => 'services3_title',
                    'label'  => 'Titulo',
                    'value'  => 'Winning awards',
                    'width'  => 3
                ],
                'services4_title'  => [
                    'type'   => 'text',
                    'name'   => 'services4_title',
                    'label'  => 'Titulo',
                    'value'  => 'Cups of coffee',
                    'width'  => 3
                ]
                
                
            ])
        ]);
        
        Block::create([
            'name'        => 'lps_block6',
            'title'       => 'Blocke #6 (THE MENU)',
            'description' => 'Seccion THE MENU para la plantilla LPR',
            'template_id' => 2,
            'position'    => 5,
            'details'     => json_encode([
                'title_strong' => [
                    'type'   => 'text',
                    'name'   => 'title_strong',
                    'label'  => 'Titulo en Negrita',
                    'value'  => 'THE MENU',
                    'width'  => 6
                ],
                'description' => [
                    'type'  => 'text_area',
                    'name'  => 'description',
                    'label' => 'Descripcion',
                    'value' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam.',
                    'width'  => 4
                ],
                //thead
                'thead'=>[
                    'number'   => [
                        'type'   => 'text',
                        'name'   => 'number',
                        'label'  => 'numero',
                        'value'  => '#',
                        'width'  => 3
                    ],
                    'name'     => [
                        'type'   => 'text',
                        'name'   => 'name',
                        'label'  => 'nombre',
                        'value'  => 'Name',
                        'width'  => 3
                    ],
                    'quantity' => [
                        'type'   => 'text',
                        'name'   => 'quantity',
                        'label'  => 'cantidad',
                        'value'  => 'Quantity',
                        'width'  => 3
                    ],
                    'price'    => [
                        'type'   => 'text',
                        'name'   => 'price',
                        'label'  => 'precio',
                        'value'  => 'Price',
                        'width'  => 3
                    ]
                ],
                //tbody
                'tbody' => [
                    'tr1'=>[
                        'th1'=>[
                            'type'   => 'text',
                            'name'   => 'th1',
                            'label'  => 'numero 1',
                            'value'  => '1',
                            'width'  => 3
                        ],
                        'th2'=>[
                            'type'   => 'text',
                            'name'   => 'th2',
                            'label'  => 'nombre',
                            'value'  => 'Tomato soup',
                            'width'  => 3
                        ],
                        'th3'=>[
                            'type'   => 'text',
                            'name'   => 'th3',
                            'label'  => 'cantidad',
                            'value'  => '400 ml',
                            'width'  => 3
                        ],
                        'th4'=>[
                            'type'   => 'text',
                            'name'   => 'th4',
                            'label'  => 'precio',
                            'value'  => '5 $',
                            'width'  => 3
                        ]
                    ],
                    'tr2'=>[
                        'th1'=>[
                            'type'   => 'text',
                            'name'   => 'th1',
                            'label'  => 'numero 1',
                            'value'  => '2',
                            'width'  => 3
                        ],
                        'th2'=>[
                            'type'   => 'text',
                            'name'   => 'th2',
                            'label'  => 'nombre',
                            'value'  => 'Caesar salad',
                            'width'  => 3
                        ],
                        'th3'=>[
                            'type'   => 'text',
                            'name'   => 'th3',
                            'label'  => 'cantidad',
                            'value'  => '150 g',
                            'width'  => 3
                        ],
                        'th4'=>[
                            'type'   => 'text',
                            'name'   => 'th4',
                            'label'  => 'precio',
                            'value'  => '10 $',
                            'width'  => 3
                        ]
                    ],
                    'tr3'=>[
                        'th1'=>[
                            'type'   => 'text',
                            'name'   => 'th1',
                            'label'  => 'numero 1',
                            'value'  => '3',
                            'width'  => 3
                        ],
                        'th2'=>[
                            'type'   => 'text',
                            'name'   => 'th2',
                            'label'  => 'nombre',
                            'value'  => 'Beef steak',
                            'width'  => 3
                        ],
                        'th3'=>[
                            'type'   => 'text',
                            'name'   => 'th3',
                            'label'  => 'cantidad',
                            'value'  => '200 g',
                            'width'  => 3
                        ],
                        'th4'=>[
                            'type'   => 'text',
                            'name'   => 'th4',
                            'label'  => 'precio',
                            'value'  => '15 $',
                            'width'  => 3
                        ]
                    ]

                ]
            ])
        ]); */
    }
}
