<?php

use Illuminate\Database\Seeder;

class purchaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\purchases::insert([
            'name' => 'Rubber (10mm)',
            'user_id' => 4,
            'price' => 00.39,
            'units' => 100,
            'available' => true
        ]);

        \App\purchases::insert([
            'name' => 'Rubber (10mm)',
            'user_id' => 4,
            'price' => 00.45,
            'units' => 100,
            'available' => true
        ]);

        \App\purchases::insert([
            'name' => 'slang',
            'user_id' => 4,
            'price' => 4.45,
            'units' => 10,
            'available' => true
        ]);

        \App\purchases::insert([
            'name' => 'voeding',
            'user_id' => 4,
            'price' => 68.69,
            'units' => 100,
            'available' => true
        ]);

        \App\purchases::insert([
            'name' => 'Ontkalker',
            'user_id' => 4,
            'price' => 4,
            'units' => 100,
            'available' => true
        ]);

        \App\purchases::insert([
            'name' => 'Waterfilter',
            'user_id' => 4,
            'price' => 299.45,
            'units' => 100,
            'available' => true
        ]);

        \App\purchases::insert([
            'name' => 'Reservoir sensor',
            'user_id' => 4,
            'price' => 89.99,
            'units' => 100,
            'available' => true
        ]);

        \App\purchases::insert([
            'name' => 'Druppelstop',
            'user_id' => 4,
            'price' =>  122.43,
            'units' => 100,
            'available' => true
        ]);

        \App\purchases::insert([
            'name' => 'Electrische pomp',
            'user_id' => 4,
            'price' => 478.59,
            'units' => 100,
            'available' => true
        ]);

        \App\purchases::insert([
            'name' => 'Tandwiel 110mm',
            'user_id' => 4,
            'price' => 5.45,
            'units' => 100,
            'available' => true
        ]);

        \App\purchases::insert([
            'name' => 'Tandwiel 70mm',
            'user_id' => 4,
            'price' => 5.25,
            'units' => 100,
            'available' => true
        ]);

        \App\purchases::insert([
            'name' => 'Maalmotor',
            'user_id' => 4,
            'price' => 119.20,
            'units' => 100,
            'available' => true
        ]);

        \App\purchases::insert([
            'name' => 'zeef',
            'user_id' => 4,
            'price' => 28.80,
            'units' => 100,
            'available' => true
        ]);

        \App\purchases::insert([
            'name' => 'Reinigingstabletten ',
            'user_id' => 4,
            'price' => 3.45,
            'units' => 100,
            'available' => true
        ]);

        \App\purchases::insert([
            'name' => 'Reiningsborsteltjes',
            'user_id' => 4,
            'price' => 8.45,
            'units' => 100,
            'available' => true
        ]);

        \App\purchases::insert([
            'name' => 'Ontkalkingspijp ',
            'user_id' => 4,
            'price' => 21.70,
            'units' => 100,
            'available' => true
        ]);
    }
}


