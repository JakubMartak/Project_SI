<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Rola_Seed extends Seeder
{
    public function run(){
        DB::table('Rola')->insert([
            'Rola'=> 'Student',
        ]);
        DB::table('Rola')->insert([
            'Rola'=> 'Pracovnik FPVaI',
        ]);
        DB::table('Rola')->insert([
            'Rola'=> 'Kontaktná osoba',
        ]);
        DB::table('Rola')->insert([
            'Rola'=> 'Veduci pracoviska',
        ]);
        DB::table('Rola')->insert([
            'Rola'=> 'Admin',
        ]);
    }
}
