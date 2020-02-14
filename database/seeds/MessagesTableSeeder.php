<?php

use Illuminate\Database\Seeder;
use App\Message;
class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Message::create([
            'from'      => 1,
            'to'        => 2,
            'message'   => 'Mensaje de Prueba'
        ]);
    }
}
