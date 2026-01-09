<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('cities')->insert([

            ['state_id' => 1, 'name' => 'Damascus'],
            ['state_id' => 1, 'name' => 'Douma'],
            ['state_id' => 2, 'name' => 'Aleppo'],
            ['state_id' => 2, 'name' => 'Manbij'],


            ['state_id' => 3, 'name' => 'Cairo'],
            ['state_id' => 3, 'name' => 'Helwan'],
            ['state_id' => 4, 'name' => 'Giza'],
            ['state_id' => 4, 'name' => '6th of October'],


            ['state_id' => 5, 'name' => 'Riyadh'],
            ['state_id' => 5, 'name' => 'Al-Kharj'],
            ['state_id' => 6, 'name' => 'Jeddah'],
            ['state_id' => 6, 'name' => 'Mecca'],


            ['state_id' => 7, 'name' => 'Amman'],
            ['state_id' => 7, 'name' => 'Madaba'],


            ['state_id' => 8, 'name' => 'Beirut'],
            ['state_id' => 8, 'name' => 'Jounieh'],
            ['state_id' => 9, 'name' => 'Tripoli'],
            ['state_id' => 9, 'name' => 'Zgharta'],
        ]);
    }
}
