<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Role::insert([
           'role'=> 'Supplies'
        ]);
        \App\Role::insert([
            'role'=> 'Sales'
        ]);
        \App\Role::insert([
            'role'=> 'Maintenance'
        ]);
        \App\Role::insert([
            'role'=> 'Finance'
        ]);
        \App\Role::insert([
            'role'=> 'Customer'
        ]);
        \App\Role::insert([
            'role'=> 'CEO'
        ]);
    }
}
