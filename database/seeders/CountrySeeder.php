<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run(): void
    {
        DB::table('countries')->insert([
            ['country_code' => 'SY', 'name' => 'Syria'],
            ['country_code' => 'EG', 'name' => 'Egypt'],
            ['country_code' => 'SA', 'name' => 'Saudi Arabia'],
            ['country_code' => 'JO', 'name' => 'Jordan'],
            ['country_code' => 'LB', 'name' => 'Lebanon'],
        ]);
    }


}
