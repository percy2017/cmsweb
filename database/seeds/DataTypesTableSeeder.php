<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataType;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'users');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'users',
                'display_name_singular' => __('voyager::seeders.data_types.user.singular'),
                'display_name_plural'   => __('voyager::seeders.data_types.user.plural'),
                'icon'                  => 'voyager-person',
                'model_name'            => 'TCG\\Voyager\\Models\\User',
                'policy_name'           => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller'            => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                'generate_permissions'  => 1,
                'description'           => '',
                'server_side'           => 0,
            ])->save();
        }

        $dataType = $this->dataType('slug', 'menus');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'menus',
                'display_name_singular' => __('voyager::seeders.data_types.menu.singular'),
                'display_name_plural'   => __('voyager::seeders.data_types.menu.plural'),
                'icon'                  => 'voyager-list',
                'model_name'            => 'TCG\\Voyager\\Models\\Menu',
                'controller'            => '',
                'generate_permissions'  => 1,
                'description'           => '',
                'server_side'           => 0,
            ])->save();
        }

        $dataType = $this->dataType('slug', 'roles');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'roles',
                'display_name_singular' => __('voyager::seeders.data_types.role.singular'),
                'display_name_plural'   => __('voyager::seeders.data_types.role.plural'),
                'icon'                  => 'voyager-lock',
                'model_name'            => 'TCG\\Voyager\\Models\\Role',
                'controller'            => '',
                'generate_permissions'  => 1,
                'description'           => '',
                'server_side'           => 0,
            ])->save();
        }

        $dataType = $this->dataType('slug', 'templates');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'templates',
                'display_name_singular' => 'Plantilla',
                'display_name_plural'   => 'Plantillas',
                'icon'                  => 'voyager-photo',
                'model_name'            => 'App\\Template',
                // 'controller'            => 'App\\Http\\Controllers\\TemplateController',
                'generate_permissions'  => 1,
                'description'           => '',
                'server_side'           => 1,
            ])->save();
        }

        $dataType = $this->dataType('slug', 'blocks');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'blocks',
                'display_name_singular' => 'Block',
                'display_name_plural'   => 'Blocks',
                'icon'                  => 'voyager-github',
                'model_name'            => 'App\\Block',
                // 'controller'            => 'App\\Http\\Controllers\\TemplateController',
                'generate_permissions'  => 1,
                'description'           => '',
                'server_side'           => 0,
            ])->save();
        }

        $dataType = $this->dataType('slug', 'pages');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'pages',
                'display_name_singular' => 'Page',
                'display_name_plural'   => 'Pages',
                'icon'                  => 'voyager-archive',
                'model_name'            => 'App\\Page',
                'generate_permissions'  => 1,
                'description'           => '',
                'server_side'           => 0,
            ])->save();
        }

        // $dataType = $this->dataType('slug', 'products');
        // if (!$dataType->exists) {
        //     $dataType->fill([
        //         'name'                  => 'products',
        //         'display_name_singular' => 'Producto',
        //         'display_name_plural'   => 'Productos',
        //         'icon'                  => 'voyager-shop',
        //         'model_name'            => 'App\\Product',
        //         // 'controller'            => 'App\\Http\\Controllers\\TemplateController',
        //         'generate_permissions'  => 1,
        //         'description'           => '',
        //         'server_side'           => 0,
        //     ])->save();
        // }

        // $dataType = $this->dataType('slug', 'comments');
        // if (!$dataType->exists) {
        //     $dataType->fill([
        //         'name'                  => 'comments',
        //         'display_name_singular' => 'Comentario',
        //         'display_name_plural'   => 'Comentarios',
        //         'icon'                  => 'voyager-bubble',
        //         'model_name'            => 'App\\Comment',
        //         'generate_permissions'  => 1,
        //         'description'           => '',
        //         'server_side'           => 0,
        //     ])->save();
        // }

        // $dataType = $this->dataType('slug', 'posts');
        // if (!$dataType->exists) {
        //     $dataType->fill([
        //         'name'                  => 'posts',
        //         'display_name_singular' => 'Post',
        //         'display_name_plural'   => 'Posts',
        //         'icon'                  => 'voyager-pen',
        //         'model_name'            => 'App\\Post',
        //         'generate_permissions'  => 1,
        //         'description'           => '',
        //         'server_side'           => 0,
        //     ])->save();
        // }
        
    }

    /**
     * [dataType description].
     *
     * @param [type] $field [description]
     * @param [type] $for   [description]
     *
     * @return [type] [description]
     */
    protected function dataType($field, $for)
    {
        return DataType::firstOrNew([$field => $for]);
    }
}
