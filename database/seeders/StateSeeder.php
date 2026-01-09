<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('states')->insert([

            ['country_id' => 1, 'name' => 'Damascus'],
            ['country_id' => 1, 'name' => 'Aleppo'],
            ['country_id' => 1, 'name' => 'Homs'],
            ['country_id' => 1, 'name' => 'Latakia'],


            ['country_id' => 2, 'name' => 'Cairo'],
            ['country_id' => 2, 'name' => 'Giza'],
            ['country_id' => 2, 'name' => 'Alexandria'],
            ['country_id' => 2, 'name' => 'Aswan'],


            ['country_id' => 3, 'name' => 'Riyadh'],
            ['country_id' => 3, 'name' => 'Jeddah'],
            ['country_id' => 3, 'name' => 'Dammam'],
            ['country_id' => 3, 'name' => 'Mecca'],


            ['country_id' => 4, 'name' => 'Amman'],
            ['country_id' => 4, 'name' => 'Irbid'],
            ['country_id' => 4, 'name' => 'Zarqa'],


            ['country_id' => 5, 'name' => 'Beirut'],
            ['country_id' => 5, 'name' => 'Tripoli'],
            ['country_id' => 5, 'name' => 'Sidon'],
        ]);
    }
}
