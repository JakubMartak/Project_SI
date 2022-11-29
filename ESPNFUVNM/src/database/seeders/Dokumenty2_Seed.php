<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Dokumenty2_Seed extends Seeder
{
    public function run(){
        DB::table('Dokumenty')->insert([
            'Typ_doc' => 'Report za fakultu',
        ]);

    }
}
