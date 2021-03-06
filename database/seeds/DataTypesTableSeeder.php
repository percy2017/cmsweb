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
                'controller'            => 'TCG\Voyager\Http\Controllers\VoyagerRoleController',
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
                'details'               => [
                    'order_column'          => 'id',
                    'order_display_column'  => 'name',
                    'order_direction'       => 'desc',
                    'default_search_key'    => 'name',
                    'scope'                 => null
                ]
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

        $dataType = $this->dataType('slug', 'excels');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'excels',
                'display_name_singular' => 'Import/Export',
                'display_name_plural'   => 'Imports/Exports',
                'icon'                  => 'voyager-upload',
                'model_name'            => 'App\\Excel',
                'generate_permissions'  => 1,
                'description'           => '',
                'server_side'           => 0,
            ])->save();
        }

        //------ Modulo Ecommerce ---------------
        //----------------------------------------
        $dataType = $this->dataType('slug', 'product_categories');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'product_categories',
                'display_name_singular' => 'Categoria',
                'display_name_plural'   => 'Categorias',
                'icon'                  => 'voyager-anchor',
                'model_name'            => 'App\\ProductCategorie',
                'generate_permissions'  => 1,
                'description'           => '',
                'server_side'           => 0,
                'details'               => [
                    'order_column'          => 'id',
                    'order_display_column'  => 'name',
                    'order_direction'       => 'desc',
                    'default_search_key'    => 'name',
                    'scope'                 => null
                ]
            ])->save();
        }

        $dataType = $this->dataType('slug', 'products');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'products',
                'display_name_singular' => 'Producto',
                'display_name_plural'   => 'Productos',
                'icon'                  => 'voyager-shop',
                'model_name'            => 'App\\Product',
                'generate_permissions'  => 1,
                'description'           => '',
                'server_side'           => 0,
                'details'               => [
                    'order_column'          => 'id',
                    'order_display_column'  => 'name',
                    'order_direction'       => 'desc',
                    'default_search_key'    => 'name',
                    'scope'                 => null
                ]
            ])->save();
        }

        $dataType = $this->dataType('slug', 'product_details');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'product_details',
                'display_name_singular' => 'Producto Detalle',
                'display_name_plural'   => 'Producto Detalles',
                'icon'                  => 'voyager-shop',
                'model_name'            => 'App\\ProductDetail',
                'generate_permissions'  => 1,
                'description'           => '',
                'server_side'           => 1,
                'details'               => [
                    'order_column'          => 'id',
                    'order_display_column'  => 'title',
                    'order_direction'       => 'desc',
                    'default_search_key'    => 'title',
                    'scope'                 => null
                ]
            ])->save();
        }
        //------ Modulo Ecommerce ---------------




        $dataType = $this->dataType('slug', 'comments');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'comments',
                'display_name_singular' => 'Comentario',
                'display_name_plural'   => 'Comentarios',
                'icon'                  => 'voyager-bubble',
                'model_name'            => 'App\\Comment',
                'generate_permissions'  => 1,
                'description'           => '',
                'server_side'           => 0,
            ])->save();
        }

        $dataType = $this->dataType('slug', 'posts');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'posts',
                'display_name_singular' => 'Post',
                'display_name_plural'   => 'Posts',
                'icon'                  => 'voyager-pen',
                'model_name'            => 'App\\Post',
                'generate_permissions'  => 1,
                'description'           => '',
                'server_side'           => 0,
            ])->save();
        }
        
        $dataType = $this->dataType('slug', 'messages');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'messages',
                'display_name_singular' => 'Message',
                'display_name_plural'   => 'Messages',
                'icon'                  => 'voyager-external',
                'model_name'            => 'App\\Message',
                'generate_permissions'  => 1,
                'description'           => '',
                'server_side'           => 0,
            ])->save();
        }

        $dataType = $this->dataType('slug', 'accounts');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'accounts',
                'display_name_singular' => 'Account',
                'display_name_plural'   => 'Accounts',
                'icon'                  => 'voyager-tv',
                'model_name'            => 'App\\Account',
                'generate_permissions'  => 1,
                'description'           => '',
                'server_side'           => 0,
            ])->save();
        }
//BREAD Profiles-----------------------------------------
//-------------------------------------------------------
        $dataType = $this->dataType('slug', 'profiles');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'profiles',
                'display_name_singular' => 'Profile',
                'display_name_plural'   => 'Profiles',
                'icon'                  => 'voyager-person',
                'model_name'            => 'App\\Profile',
                'generate_permissions'  => 1,
                'description'           => '',
                'server_side'           => 0,
            ])->save();
        }

        //BREAD Caja-----------------------------------------
        //-------------------------------------------------------
        $dataType = $this->dataType('slug', 'cajas');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'cajas',
                'display_name_singular' => 'Caja',
                'display_name_plural'   => 'Cajas',
                'icon'                  => 'voyager-dollar',
                'model_name'            => 'App\\Caja',
                'generate_permissions'  => 1,
                'description'           => '',
                'server_side'           => 0,
            ])->save();
        }

          //BREAD Asiento-----------------------------------------
        //-------------------------------------------------------
        $dataType = $this->dataType('slug', 'asientos');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'asientos',
                'display_name_singular' => 'Asiento',
                'display_name_plural'   => 'Asientos',
                'icon'                  => 'voyager-polaroid',
                'model_name'            => 'App\\Asiento',
                'generate_permissions'  => 1,
                'description'           => '',
                'server_side'           => 0,
            ])->save();
        }
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
