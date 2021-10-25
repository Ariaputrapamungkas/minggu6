<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'nim' => '2031710139',
            'name' => 'Moh. Iqbal Waldan',
            'class' => 'MI 2F',
            'departement' => 'Manajemen Informatika',
            'phone_number' => '081334277979',
        ]);
        DB::table('students')->insert([
            'nim' => '2031710173',
            'name' => 'Muhammad Alfian',
            'class' => 'MI 2F',
            'departement' => 'Manajemen Informatika',
            'phone_number' => '082338777766',
        ]);
        DB::table('students')->insert([
            'nim' => '2031710169',
            'name' => 'Muhammad Azrieal Rhamdan',
            'class' => 'MI 2F',
            'departement' => 'Manajemen Informatika',
            'phone_number' => '081907961152',
        ]);
    }
}