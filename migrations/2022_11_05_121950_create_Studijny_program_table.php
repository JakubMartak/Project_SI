<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudijnyProgramTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Studijny_program', function (Blueprint $table) {
            $table->integer('idStudijny_program', true);
            $table->string('Nazov', 45);
            $table->string('Skratka', 45);
            $table->integer('Predmety_idPredmety')->index('fk_Studijny_program_Predmety1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Studijny_program');
    }
}
