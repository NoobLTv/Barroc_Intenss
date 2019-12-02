<?php

use Illuminate\Database\Seeder;

class LeaseTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\LeaseType::insert([
            'id' => '1',
            'leasetype' => 'maandelijks',
        ]);

        \App\LeaseType::insert([
            'id' => '2',
            'leasetype' => 'periodieke',
        ]);
    }
}
