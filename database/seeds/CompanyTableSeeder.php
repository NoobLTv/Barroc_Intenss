<?php

use Illuminate\Database\Seeder;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Companyname::insert([
            'user_id' => '7',
            'companyname' => 'progamesapps',
            'must_still_approve' => 0,
            'approved' => 0,
        ]);

        \App\Companyname::insert([
            'user_id' => '8',
            'companyname' => 'gamesapps',
            'must_still_approve' => 0,
            'approved' => 0,
        ]);

        \App\Companyname::insert([
            'user_id' => '9',
            'companyname' => 'appgames',
            'must_still_approve' => 0,
            'approved' => 0,
        ]);


        \App\Companyname::insert([
            'user_id' => '10',
            'companyname' => 'gamesstudio',
            'must_still_approve' => 0,
            'approved' => 0,
        ]);
    }
}
