<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Dodatocne_Prax_Seed extends Seeder
{
    public function run(){
        DB::table('Prax')->insert([
            'Pozicia' => 'Technik',
            'Student_idPouzivatel' => 1,
            'Datum_start' => now(),
            'Datum_end' => '2022-12-20',
            'Firma_idFirma' => 5,
            'Kontaktna_osoba_idPouzivatel' => 4,
            'Aktuálny_stav' => 'done',
            'Predmety_idPredmety' => 1,
            'Pracovnik_FPVaI_idPouzivatel' => 3,
            'Zmluva_idZmluva' => 1,
        ]);

        DB::table('Prax')->insert([
            'Pozicia' => 'Tester',
            'Student_idPouzivatel' => 2,
            'Datum_start' => now(),
            'Firma_idFirma' => 1,
            'Kontaktna_osoba_idPouzivatel' => 4,
            'Aktuálny_stav' => 'done',
            'Predmety_idPredmety' => 1,
            'Pracovnik_FPVaI_idPouzivatel' => 3,
            'Zmluva_idZmluva' => 3,
        ]);

        DB::table('Prax')->insert([
            'Pozicia' => 'Scrum master',
            'Student_idPouzivatel' => 1,
            'Datum_start' => now(),
            'Datum_end' => '2022-12-19',
            'Firma_idFirma' => 4,
            'Kontaktna_osoba_idPouzivatel' => 4,
            'Aktuálny_stav' => 'done',
            'Predmety_idPredmety' => 2,
            'Pracovnik_FPVaI_idPouzivatel' => 3,
            'Zmluva_idZmluva' => 2,
        ]);

        DB::table('Prax')->insert([
            'Pozicia' => 'Junior programátor',
            'Student_idPouzivatel' => 2,
            'Datum_start' => now(),
            'Firma_idFirma' => 5,
            'Kontaktna_osoba_idPouzivatel' => 4,
            'Aktuálny_stav' => 'prebieha',
            'Predmety_idPredmety' => 2,
            'Pracovnik_FPVaI_idPouzivatel' => 3,
            'Zmluva_idZmluva' => 1,
        ]);

    }
}
