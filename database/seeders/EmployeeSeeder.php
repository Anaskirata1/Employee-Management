<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class EmployeeSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('employees')->insert([
            [
                'country_id'    => 1,
                'state_id'      => 1,
                'city_id'       => 1,
                'department_id' => 1,
                'first_name'    => 'Anas',
                'last_name'     => 'Khaled',
                'address'       => 'Main Street 123',
                'zip_code'      => '11111',
                'birth_date'    => '1990-05-10',
                'date_hired'    => '2020-01-15',
                'email'         => 'anaskirata1@gmail.com',
                'password'      => Hash::make('12345678'), // كلمة مرور مشفرة
                'status'        => false, // مسجل دخول (علامة خضراء)
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'country_id'    => 2,
                'state_id'      => 3,
                'city_id'       => 5,
                'department_id' => 2,
                'first_name'    => 'Sara',
                'last_name'     => 'Ahmed',
                'address'       => 'Garden Street 45',
                'zip_code'      => '22222',
                'birth_date'    => '1995-08-20',
                'date_hired'    => '2021-03-01',
                'email'         => 'anaskirata2@gmail.com',
                'password'      => Hash::make('12345678'),
                'status'        => false, // غير مسجل دخول
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
        ]);
    }
}
