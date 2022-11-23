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

        $this->call([
            Firmy_Seed::class,
            Mesto_Seed::class,
            Pouzivatel_Seed::class,
            Prax_Seed::class,
            Predmet_Seed::class,
            Rola_Seed::class,
            Studijny_program_Seed::class,
            Users::class,
            Zmluva_Seed::class,
            
            Dokumenty_Seed::class,
            Prax_has_Dokumenty_Seed::class,
            Dodatocne_Prax_Seed::class,
        ]);
    }
}
