<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePouzivatelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pouzivatel', function (Blueprint $table) {
            $table->integer('idPouzivatel', true);
            $table->string('Meno', 45);
            $table->string('Priezvisko', 45);
            $table->string('Cislo', 45);
            $table->string('Mail', 45);
            $table->string('Rola_pouzivatela', 45);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Pouzivatel');
    }
}
