<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFirmaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Firma', function (Blueprint $table) {
            $table->integer('idFirma', true);
            $table->string('Názov_firmy', 45);
            $table->string('Skratka', 45);
            $table->string('Adresa', 45);
            $table->integer('Mesto_idMesto')->index('fk_Firma_Mesto1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Firma');
    }
}
