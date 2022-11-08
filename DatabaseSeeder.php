<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

       DB::table('users')->insert([
           'name'=> 'Martin',
           'email'=> 'martin.kratky@student.ukf.sk',
           //'password'=> 'Martin123',
           'password'=> Hash::make('Martin123'),
       ]);

        DB::table('users')->insert([
            'name'=> 'Jakub',
            'email'=> 'jakub.martak@student.ukf.sk',
            //'password'=> 'Jakub123',
            'password'=> Hash::make('Jakub123'),
        ]);

        DB::table('users')->insert([
            'name'=> 'Marek',
            'email'=> 'marek.hrabcak@student.ukf.sk',
            //'password'=> 'Marek123',
            'password'=> Hash::make('Marek123'),
        ]);

        DB::table('users')->insert([
            'name'=> 'Mario',
            'email'=> 'mario.belansky@student.ukf.sk',
            //'password'=> 'Mario123',
            'password'=> Hash::make('Mario123'),
        ]);
    }
}
