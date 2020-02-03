<?php

use Illuminate\Database\Seeder;
use App\Page;

class PageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Page::create([
            'name'        => 'App Movil',
            'slug'    => 'app-movil'
        ]);
    }
}
