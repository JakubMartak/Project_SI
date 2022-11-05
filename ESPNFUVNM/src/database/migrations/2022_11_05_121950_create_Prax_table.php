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
            $table->string('Info_o_praxi', 100);
            $table->integer('Student_idPouzivatel')->nullable()->index('fk_Prax_Pouzivatel1_idx');
            $table->date('Datum_start')->nullable();
            $table->date('Datum_end')->nullable();
            $table->integer('Firma_idFirma')->index('fk_Prax_Firma1_idx');
            $table->integer('Kontaktna_osoba_idPouzivatel')->index('fk_Prax_Pouzivatel2_idx');
            $table->string('Aktuálny_stav', 45);
            $table->string('Report', 100)->nullable();
            $table->string('Spatna_vazba_k_praxi_studenta', 100)->nullable();
            $table->integer('Studijny_program_idStudijny_program')->index('fk_Prax_Studijny_program1_idx');
            $table->integer('Pracovnik_FPVaI_idPouzivatel1')->index('fk_Prax_Pouzivatel3_idx');
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
