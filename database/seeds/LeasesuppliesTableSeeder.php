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
        for( $i =0; $i < 50; $i++){
            \App\LeaseSupplies::insert([
                'name' => \Illuminate\Support\Str::random(10),
                'articlecode' => 'S234MMPLA',
                'leaseprice' => 877,
                'Installationcosts' => 375
            ]);
        }
}}
