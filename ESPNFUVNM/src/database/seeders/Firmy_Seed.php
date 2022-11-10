<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Firmy_Seed extends Seeder
{
    public function run(){
        DB::table('Firma')->insert([
            'Názov_firmy'=> 'ARTIN Solutions, s.r.o.',
            'Skratka' => 'ARTIN',
            'Adresa' => 'Dlhá 3',
            'Mesto_idMesto' => 2,
        ]);
        DB::table('Firma')->insert([
            'Názov_firmy'=> 'Siemens Slovensko',
            'Skratka' => 'SMN',
            'Adresa' => 'Lamačská cesta',
            'Mesto_idMesto' => 2,
        ]);
        DB::table('Firma')->insert([
            'Názov_firmy'=> 'DITEC s.r.o.',
            'Skratka' => 'DITEC',
            'Adresa' => 'Poštová 1',
            'Mesto_idMesto' => 3,
        ]);
        DB::table('Firma')->insert([
            'Názov_firmy'=> 'IBM',
            'Skratka' => 'IBM',
            'Adresa' => 'Pekná 1',
            'Mesto_idMesto' => 2,
        ]);
        DB::table('Firma')->insert([
            'Názov_firmy'=> 'UNIQA Group Service Center',
            'Skratka' => 'UNIQA',
            'Adresa' => 'Staničná 4',
            'Mesto_idMesto' => 1,
        ]);
    }
}
