<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Prax_Seed extends Seeder
{
    public function run(){
        DB::table('Prax')->insert([
            'Pozicia' => 'Technik pre skúšobné dáta',
            'Firma_idFirma' => 5,
            'Kontaktna_osoba_idPouzivatel' => 4,
            'Predmety_idPredmety' => 1,
            'Pracovnik_FPVaI_idPouzivatel' => 3,
            'Zmluva_idZmluva' => 1,
        ]);
        DB::table('Prax')->insert([
            'Pozicia' => 'IoT Application Engineer',
            'Firma_idFirma' => 2,
            'Kontaktna_osoba_idPouzivatel' => 4,
            'Predmety_idPredmety' => 2,
            'Pracovnik_FPVaI_idPouzivatel' => 3,
            'Zmluva_idZmluva' => 2,
        ]);
        DB::table('Prax')->insert([
            'Pozicia' => 'IT Support',
            'Firma_idFirma' => 1,
            'Kontaktna_osoba_idPouzivatel' => 4,
            'Predmety_idPredmety' => 2,
            'Pracovnik_FPVaI_idPouzivatel' => 3,
            'Zmluva_idZmluva' => 3,
        ]);
        DB::table('Prax')->insert([
            'Pozicia' => 'Project Manager',
            'Firma_idFirma' => 4,
            'Kontaktna_osoba_idPouzivatel' => 4,
            'Predmety_idPredmety' => 1,
            'Pracovnik_FPVaI_idPouzivatel' => 3,
            'Zmluva_idZmluva' => 3,
        ]);
    }
}
