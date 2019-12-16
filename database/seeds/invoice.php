<?php

use Illuminate\Database\Seeder;

class invoice extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for($i = 0; $i < 500; $i++){
            \App\invoice::insert([
                'lease_id' => $faker->numberBetween(1, 61),
                'name' => \Illuminate\Support\Str::random(10),
                'price' => $faker->numberBetween(5, 150)
            ]);
        }
    }
}
