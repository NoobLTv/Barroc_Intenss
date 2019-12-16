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
            'email'=> 'ceo@barroc.nl',
            'name'=> 'ceo',
            'password'=> Hash::make('barroc123'),
            'notes' => '',
            'role_id'    => 6
        ]);

        \App\User::insert([
            'email'=> 'sales@barroc.nl',
            'name'=> 'sales',
            'password'=> Hash::make('barroc123'),
            'notes' => '',
            'role_id'    => 2
        ]);

        \App\User::insert([
            'email'=> 'finance@barroc.nl',
            'name'=> 'finance',
            'password'=> Hash::make('barroc123'),
            'notes' => '',
            'role_id'    => 4
        ]);

        \App\User::insert([
            'email'=> 'supplies@barroc.nl',
            'name'=> 'supplies',
            'password'=> Hash::make('barroc123'),
            'notes' => '',
            'role_id'    => 1
        ]);

        \App\User::insert([
            'email'=> 'headmaintenancemail@barroc.nl',
            'name'=> 'headmaintenancemail',
            'password'=> Hash::make('barroc123'),
            'notes' => '',
            'role_id'    => 3
        ]);


        \App\User::insert([
            'email'=> 'customer@gmail.com',
            'name'=> 'headmaintenancemail',
            'password'=> Hash::make('customer123'),
            'notes' => '',
            'role_id'    => 5
        ]);


        for( $i =0; $i < 150; $i++){
            \App\User::insert([
                'email' => \Illuminate\Support\Str::random(10).'@gmail.com',
                'name' => \Illuminate\Support\Str::random(10),
                'password'=> Hash::make('barroc123'),
                'notes' => '',
                'role_id' => 5
            ]);
        }

    }
}
