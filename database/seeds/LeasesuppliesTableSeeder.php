<?php

use Illuminate\Database\Seeder;

class LeasesuppliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\LeaseSupplies::insert([
            'name' => 'Barroc Intens Italian Light',
            'articlecode' => 'S234FREKT',
            'leaseprice' => 499,
            'Installationcosts' => 289,
        ]);

        \App\LeaseSupplies::insert([
            'name' => 'Barroc Intens Italian',
            'articlecode' => 'S234KNDPF',
            'leaseprice' => 599,
            'Installationcosts' => 289,
        ]);

        \App\LeaseSupplies::insert([
            'name' => 'Barroc Intens Italian Deluxe',
            'articlecode' => 'S234NNBMV',
            'leaseprice' => 799,
            'Installationcosts' => 375,
        ]);

        \App\LeaseSupplies::insert([
            'name' => 'Barroc Intens Italian Deluxe Special',
            'articlecode' => 'S234MMPLA',
            'leaseprice' => 999,
            'Installationcosts' => 375,
        ]);
    }
}
