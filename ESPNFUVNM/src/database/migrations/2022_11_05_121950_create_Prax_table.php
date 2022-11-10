<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePraxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Prax', function (Blueprint $table) {
            $table->integer('idPrax', true);
            $table->string('Pozicia', 100);
            $table->integer('Student_idPouzivatel')->nullable()->index('fk_Prax_Pouzivatel1_idx');
            $table->date('Datum_start')->nullable();
            $table->date('Datum_end')->nullable();
            $table->integer('Firma_idFirma')->index('fk_Prax_Firma1_idx');
            $table->integer('Kontaktna_osoba_idPouzivatel')->index('fk_Prax_Pouzivatel2_idx');
            $table->string('Aktuálny_stav', 45)->nullable();
            $table->integer('Predmety_idPredmety')->index('fk_Prax_Predmety1_idx');
            $table->integer('Pracovnik_FPVaI_idPouzivatel')->index('fk_Prax_Pouzivatel3_idx');
            $table->integer('Zmluva_idZmluva')->index('fk_Prax_Zmluva1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Prax');
    }
}
