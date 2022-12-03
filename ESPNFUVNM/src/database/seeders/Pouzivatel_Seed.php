<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Pouzivatel_Seed extends Seeder
{
    public function run(){
        //id1
        DB::table('Pouzivatel')->insert([
            'Meno'=> 'Martin',
            'Priezvisko' => 'Krátky',
            'Cislo' => '0911 111 111',
            'Mail' => 'martin.kratky@student.ukf.sk',
            'Rola_pouzivatela' => 1,
        ]);
        //id2
        DB::table('Pouzivatel')->insert([
            'Meno'=> 'Jakub',
            'Priezvisko' => 'Martak',
            'Cislo' => '0911 111 112',
            'Mail' => 'jakub.martak@student.ukf.sk',
            'Rola_pouzivatela' => 1,
        ]);
        //id3
        DB::table('Pouzivatel')->insert([
            'Meno'=> 'Marek',
            'Priezvisko' => 'Hrabcak',
            'Mail' => 'marek.hrabcak@student.ukf.sk',
            'Rola_pouzivatela' => 2,
        ]);
        //id4
        DB::table('Pouzivatel')->insert([
            'Meno'=> 'Mario',
            'Priezvisko' => 'Belansky',
            'Mail' => 'mario.belansky@student.ukf.sk',
            'Rola_pouzivatela' => 3,
            'Firma_idFirma' => 1,
        ]);
        //id5
        DB::table('Pouzivatel')->insert([
            'Meno'=> 'admin',
            'Priezvisko' => 'admin',
            'Mail' => 'admin@ukf.sk.com',
            'Rola_pouzivatela' => 5,
        ]);
        //id6
        DB::table('Pouzivatel')->insert([
            'Meno'=> 'Peter',
            'Priezvisko' => 'Druhý',
            'Mail' => 'peter.druhy@gmail.com',
            'Rola_pouzivatela' => 3,
            'Firma_idFirma' => 2,
        ]);
        //id7
        DB::table('Pouzivatel')->insert([
            'Meno'=> 'Marcel',
            'Priezvisko' => 'Tretí',
            'Mail' => 'marcel.treti@gmail.com',
            'Rola_pouzivatela' => 3,
            'Firma_idFirma' => 3,
        ]);
        //id8
        DB::table('Pouzivatel')->insert([
            'Meno'=> 'Ivan',
            'Priezvisko' => 'Hrozný',
            'Mail' => 'ivan.hrozny@gmail.com',
            'Rola_pouzivatela' => 3,
            'Firma_idFirma' => 4,
        ]);
        //id9
        DB::table('Pouzivatel')->insert([
            'Meno'=> 'Jozef',
            'Priezvisko' => 'Kral',
            'Mail' => 'jozef.kral@gmail.com',
            'Rola_pouzivatela' => 3,
            'Firma_idFirma' => 5,
        ]);
        //id10
        DB::table('Pouzivatel')->insert([
            'Meno'=> 'Jan',
            'Priezvisko' => 'Veduci',
            'Mail' => 'jan.veduci@gmail.com',
            'Rola_pouzivatela' => 4,
        ]);
    }
}
