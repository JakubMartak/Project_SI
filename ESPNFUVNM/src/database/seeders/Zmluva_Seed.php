<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Zmluva_Seed extends Seeder
{
    public function run(){
        DB::table('Zmluva')->insert([
            'Typ_zmluvy'=> 'Dohoda o vykonaní práce',
        ]);
        DB::table('Zmluva')->insert([
            'Typ_zmluvy'=> 'Dohoda o pracovnej činnosti',
        ]);
        DB::table('Zmluva')->insert([
            'Typ_zmluvy'=> 'Dohoda o brigádnickej práci študenta',
        ]);
    }
}
