<?php

use Illuminate\Database\Seeder;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::insert([
            'email'=> 'sales@sales.com',
            'name'=> 'sales',
            'password'=> 'Sales123!',

        ]);
    }
}
