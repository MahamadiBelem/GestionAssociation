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
        //$this->call(UsersTableSeeder::class);
        $this->call(VisitesTableSeeder::class);
        $this->call(cartesTableSeeder::class);
        $this->call(enginsTableSeeder::class);
    }
}
