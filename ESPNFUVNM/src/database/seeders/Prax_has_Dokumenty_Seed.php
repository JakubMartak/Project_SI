<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Prax_has_Dokumenty_Seed extends Seeder
{
    public function run(){
        DB::table('Prax_has_Dokumenty')->insert([
            'Prax_idPrax' => 1,
            'Dokumenty_idDokumenty' => 1,
            'Datum_pridania' => now(),
            'Nazov' => 'Výkaz o vykonaní praxe pre študenta',
        ]);

        DB::table('Prax_has_Dokumenty')->insert([
            'Prax_idPrax' => 1,
            'Dokumenty_idDokumenty' => 2,
            'Datum_pridania' => now(),
            'Nazov' => 'Spatná vazba študenta',
        ]);

        DB::table('Prax_has_Dokumenty')->insert([
            'Prax_idPrax' => 1,
            'Dokumenty_idDokumenty' => 3,
            'Datum_pridania' => now(),
            'Nazov' => 'Osvedcenie pre študenta',
        ]);

        DB::table('Prax_has_Dokumenty')->insert([
            'Prax_idPrax' => 2,
            'Dokumenty_idDokumenty' => 1,
            'Datum_pridania' => now(),
            'Nazov' => 'Výkaz o vykonaní praxe pre študenta',
        ]);

        DB::table('Prax_has_Dokumenty')->insert([
            'Prax_idPrax' => 2,
            'Dokumenty_idDokumenty' => 2,
            'Datum_pridania' => now(),
            'Nazov' => 'Spatná vazba študenta',
        ]);

        DB::table('Prax_has_Dokumenty')->insert([
            'Prax_idPrax' => 2,
            'Dokumenty_idDokumenty' => 3,
            'Datum_pridania' => now(),
            'Nazov' => 'Osvedcenie pre študenta',
        ]);

        DB::table('Prax_has_Dokumenty')->insert([
            'Prax_idPrax' => 3,
            'Dokumenty_idDokumenty' => 1,
            'Datum_pridania' => now(),
            'Nazov' => 'Výkaz o vykonaní praxe pre študenta',
        ]);

        DB::table('Prax_has_Dokumenty')->insert([
            'Prax_idPrax' => 3,
            'Dokumenty_idDokumenty' => 2,
            'Datum_pridania' => now(),
            'Nazov' => 'Spatná vazba študenta',
        ]);

        DB::table('Prax_has_Dokumenty')->insert([
            'Prax_idPrax' => 3,
            'Dokumenty_idDokumenty' => 3,
            'Datum_pridania' => now(),
            'Nazov' => 'Osvedcenie pre študenta',
        ]);

        DB::table('Prax_has_Dokumenty')->insert([
            'Prax_idPrax' => 4,
            'Dokumenty_idDokumenty' => 1,
            'Datum_pridania' => now(),
            'Nazov' => 'Výkaz o vykonaní praxe pre študenta',
        ]);

        DB::table('Prax_has_Dokumenty')->insert([
            'Prax_idPrax' => 4,
            'Dokumenty_idDokumenty' => 3,
            'Datum_pridania' => now(),
            'Nazov' => 'Osvedcenie pre študenta',
        ]);
    }
}
