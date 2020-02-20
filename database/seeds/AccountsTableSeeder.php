<?php

use Illuminate\Database\Seeder;
use App\Account;
use App\Profile;
use Carbon\Carbon;
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

        // Profile::create([
        //     'fullname'   => 'luis flores',
        //     'phone'      => '7000001',
        //     'membership' => 'Mensual',
        //     'statu'      => 'Vigente',
        //     'startdate'  => Carbon::now()
        // ]);
    }
}
