<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Users extends Seeder
{
    public function run(){
        DB::table('users')->insert([
            'name'=> 'Martin',
            'email'=> 'martin.kratky@student.ukf.sk',
            'password'=> Hash::make('Martin123'),
        ]);

        DB::table('users')->insert([
            'name'=> 'Jakub',
            'email'=> 'jakub.martak@student.ukf.sk',
            'password'=> Hash::make('Jakub123'),
        ]);

        DB::table('users')->insert([
            'name'=> 'Marek',
            'email'=> 'marek.hrabcak@student.ukf.sk',
            'password'=> Hash::make('Marek123'),
        ]);

        DB::table('users')->insert([
            'name'=> 'Mario',
            'email'=> 'mario.belansky@student.ukf.sk',
            'password'=> Hash::make('Mario123'),
        ]);
    }
}
