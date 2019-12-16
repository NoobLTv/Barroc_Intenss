<?php

use Illuminate\Database\Seeder;

class leases extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $customers = \App\User::where('role_id', 5)->get();

        \App\lease::insert([
           'lease_type_id' => 1,
           'customer_id' => 21,
           'finance_id' => 3,
           'startdate' => $faker->date(),
           'enddate' => $faker->date(),
           'connectioncosts' => 300,
           'noticeperiod' => $faker->date()
        ]);

            for($i = 0; $i < 150; $i++){
                \App\lease::insert([
                    'lease_type_id' => $faker->numberBetween(1, 2),
                    'customer_id' => $faker->numberBetween( 5, 150),
                    'finance_id' => 3,
                    'startdate' => $faker->date(),
                    'enddate' => $faker->date(),
                    'connectioncosts' => 300,
                    'noticeperiod' => $faker->date()
            ]);
        }

        }

}
