<?php

use Illuminate\Database\Seeder;
use App\Account;
class AccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Account::create([
            'name'    => 'Cuenta de Prueba',
            'user_id' => 1
        ]);
    }
}
