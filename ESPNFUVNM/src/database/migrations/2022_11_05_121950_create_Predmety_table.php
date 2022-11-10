<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePredmetyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Predmety', function (Blueprint $table) {
            $table->integer('idPredmety', true);
            $table->string('Nazov', 45);
            $table->string('Skratka', 45);
            $table->integer('Studijny_program_idStudijny_program')->index('fk_Predmety_Studijny_program1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Predmety');
    }
}
