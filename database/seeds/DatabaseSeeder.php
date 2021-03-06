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
        $this->call(RolesTableSeeder::class);
        $this->call(users::class);
        $this->call(suppliesSeeder::class);
        $this->call(LeaseTypeTableSeeder::class);
        $this->call(LeasesuppliesTableSeeder::class);
        $this->call(leases::class);
        $this->call(invoice::class);
    }
}
