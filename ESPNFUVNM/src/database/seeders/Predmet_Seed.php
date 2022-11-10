<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Predmet_Seed extends Seeder
{
    public function run(){
        DB::table('Predmety')->insert([
            'Nazov'=> 'Bakalár',
            'Skratka' => 'Bc.',
            'Studijny_program_idStudijny_program' => 1,
        ]);
        DB::table('Predmety')->insert([
            'Nazov'=> 'Magister',
            'Skratka' => 'Mgr.',
            'Studijny_program_idStudijny_program' => 1,
        ]);
    }
}
