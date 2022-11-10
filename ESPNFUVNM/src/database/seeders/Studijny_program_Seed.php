<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Studijny_program_Seed extends Seeder
{
    public function run(){
        DB::table('Studijny_program')->insert([
            'Nazov'=> 'Aplikovaná informatika',
            'Skratka' => 'AI',
        ]);
    }
}
