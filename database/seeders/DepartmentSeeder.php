<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('departments')->insert([
            ['name' => 'Human Resources'],
            ['name' => 'Finance'],
            ['name' => 'IT'],
            ['name' => 'Marketing'],
            ['name' => 'Sales'],
            ['name' => 'Operations'],
            ['name' => 'Customer Support'],
            ['name' => 'Research & Development'],
            ['name' => 'Logistics'],
            ['name' => 'Procurement'],
        ]);
    }
}
