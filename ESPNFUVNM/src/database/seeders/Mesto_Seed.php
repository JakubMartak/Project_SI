<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Mesto_Seed extends Seeder
{
    public function run(){
        DB::table('Mesto')->insert([
            'Nazov'=> 'Nitra',
        ]);
        DB::table('Mesto')->insert([
            'Nazov'=> 'Bratislava',
        ]);
        DB::table('Mesto')->insert([
            'Nazov'=> 'Zilina',
        ]);
        DB::table('Mesto')->insert([
            'Nazov'=> 'Trnava',
        ]);
        DB::table('Mesto')->insert([
            'Nazov'=> 'Banska Bystrica',
        ]);
    }
}
