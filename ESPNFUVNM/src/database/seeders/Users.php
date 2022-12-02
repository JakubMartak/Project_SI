<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Users extends Seeder
{
    public function run(){
        //id1
        DB::table('users')->insert([
            'name'=> 'Martin',
            'email'=> 'martin.kratky@student.ukf.sk',
            'password'=> Hash::make('Martin123'),
        ]);
        //id2
        DB::table('users')->insert([
            'name'=> 'Jakub',
            'email'=> 'jakub.martak@student.ukf.sk',
            'password'=> Hash::make('Jakub123'),
        ]);
        //id3
        DB::table('users')->insert([
            'name'=> 'Marek',
            'email'=> 'marek.hrabcak@student.ukf.sk',
            'password'=> Hash::make('Marek123'),
        ]);
        //id4
        DB::table('users')->insert([
            'name'=> 'Mario',
            'email'=> 'mario.belansky@student.ukf.sk',
            'password'=> Hash::make('Mario123'),
        ]);
        //id5
        DB::table('users')->insert([
            'name'=> 'admin',
            'email'=> 'admin@ukf.sk',
            'password'=> Hash::make('Admin123'),
        ]);
        //id6
        DB::table('users')->insert([
            'name'=> 'Peter Druhý',
            'email'=> 'peter.druhy@gmail.com',
            'password'=> Hash::make('preterdruhy'),
        ]);
        //id7
        DB::table('users')->insert([
            'name'=> 'Marcel Tretí',
            'email'=> 'marcel.treti@gmail.com',
            'password'=> Hash::make('marceltreti'),
        ]);
        //id8
        DB::table('users')->insert([
            'name'=> 'Ivan Hrozný',
            'email'=> 'ivan.hrozny@gmail.com',
            'password'=> Hash::make('ivanhrozny'),
        ]);
        //id9
        DB::table('users')->insert([
            'name'=> 'Jozef Kral',
            'email'=> 'jozef.kral@gmail.com',
            'password'=> Hash::make('jozefkral'),
        ]);
        //id10
        DB::table('users')->insert([
            'name'=> 'Jan Veduci',
            'email'=> 'jan.veduci@gmail.com',
            'password'=> Hash::make('janveduci'),
        ]);
    }
}
