<?php

use Illuminate\Database\Seeder;
use App\Excel;
class ExcelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Excel::create([
            'name' => 'Import of Test'
        ]);
    }
}
