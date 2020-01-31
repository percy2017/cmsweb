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
                'title_strong' => 'Titulo Strong  1',
                'title'        => ' Titulo default 1',
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
            ])
        ]);
    }
}
