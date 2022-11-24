<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Dokumenty_Seed extends Seeder
{
    public function run(){
        DB::table('Dokumenty')->insert([
            'Typ_doc' => 'Výkaz o vykonaní praxe',
        ]);

        DB::table('Dokumenty')->insert([
            'Typ_doc' => 'Spatna_vazba',
        ]);

        DB::table('Dokumenty')->insert([
            'Typ_doc' => 'Osvedčenie',
        ]);
    }
}
