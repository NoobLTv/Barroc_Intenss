<?php

use Illuminate\Database\Seeder;

class suppliesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\supplies::insert([
            'name' => 'Rubber (10mm)',
            'price' => 00.39,
            'units' => 100,
            'available' => true
        ]);

        \App\supplies::insert([
            'name' => 'Rubber (10mm)',
            'price' => 00.45,
            'units' => 0,
            'available' => false
        ]);

        \App\supplies::insert([
            'name' => 'slang',
            'price' => 4.45,
            'units' => 10,
            'available' => true
        ]);

        \App\supplies::insert([
            'name' => 'voeding',
            'price' => 68.69,
            'units' => 100,
            'available' => true
        ]);

        \App\supplies::insert([
            'name' => 'Ontkalker',
            'price' => 4,
            'units' => 100,
            'available' => true
        ]);

        \App\supplies::insert([
            'name' => 'Waterfilter',
            'price' => 299.45,
            'units' => 100,
            'available' => true
        ]);

        \App\supplies::insert([
            'name' => 'Reservoir sensor',
            'price' => 89.99,
            'units' => 100,
            'available' => true
        ]);

        \App\supplies::insert([
            'name' => 'Druppelstop',
            'price' =>  122.43,
            'units' => 100,
            'available' => true
        ]);

        \App\supplies::insert([
            'name' => 'Electrische pomp',
            'price' => 478.59,
            'units' => 100,
            'available' => true
        ]);

        \App\supplies::insert([
            'name' => 'Tandwiel 110mm',
            'price' => 5.45,
            'units' => 100,
            'available' => true
        ]);

        \App\supplies::insert([
            'name' => 'Tandwiel 70mm',
            'price' => 5.25,
            'units' => 100,
            'available' => true
        ]);

        \App\supplies::insert([
            'name' => 'Maalmotor',
            'price' => 119.20,
            'units' => 100,
            'available' => true
        ]);

        \App\supplies::insert([
            'name' => 'zeef',
            'price' => 28.80,
            'units' => 100,
            'available' => true
        ]);

        \App\supplies::insert([
            'name' => 'Reinigingstabletten ',
            'price' => 3.45,
            'units' => 100,
            'available' => true
        ]);

        \App\supplies::insert([
            'name' => 'Reiningsborsteltjes',
            'price' => 8.45,
            'units' => 100,
            'available' => true
        ]);

        \App\supplies::insert([
            'name' => 'Ontkalkingspijp ',
            'price' => 21.70,
            'units' => 100,
            'available' => true
        ]);
    }
}
