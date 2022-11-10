<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Pouzivatel_Seed extends Seeder
{
    public function run(){
        DB::table('Pouzivatel')->insert([
            'Meno'=> 'Martin',
            'Priezvisko' => 'Krátky',
            'Cislo' => '0911 111 111',
            'Mail' => 'martin.kratky@student.ukf.sk',
            'Rola_pouzivatela' => 1,
        ]);
        DB::table('Pouzivatel')->insert([
            'Meno'=> 'Jakub',
            'Priezvisko' => 'Martak',
            'Cislo' => '0911 111 112',
            'Mail' => 'jakub.martak@student.ukf.sk',
            'Rola_pouzivatela' => 1,
        ]);
        DB::table('Pouzivatel')->insert([
            'Meno'=> 'Peter',
            'Priezvisko' => 'Dobrý',
            'Mail' => 'peter@ukf.sk',
            'Rola_pouzivatela' => 2,
        ]);
        DB::table('Pouzivatel')->insert([
            'Meno'=> 'Adam',
            'Priezvisko' => 'Zlý',
            'Mail' => 'adam973@gmail.com',
            'Rola_pouzivatela' => 3,
        ]);
    }
}
