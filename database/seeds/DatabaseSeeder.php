<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(VoyagerDatabaseSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(TemplatesTableSeeder::class);
        $this->call(BlockTableSeeder::class);
        $this->call(PageTableSeeder::class);
        $this->call(ExcelsTableSeeder::class);
        $this->call(MessagesTableSeeder::class);
        $this->call(ProductCategoryTableSeeder::class);
        $this->call(ProductTableSeeder::class);

        // Modulo Streaming
        $this->call(AccountsTableSeeder::class);
    }
}
