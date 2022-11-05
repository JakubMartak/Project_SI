<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePraxHasDokumentyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Prax_has_Dokumenty', function (Blueprint $table) {
            $table->integer('Prax_idPrax')->index('fk_Prax_has_Dokumenty_Prax1_idx');
            $table->integer('Dokumenty_idDokumenty')->index('fk_Prax_has_Dokumenty_Dokumenty1_idx');
            $table->date('Datum_pridania')->nullable();
            $table->string('Nazov', 128);

            $table->primary(['Prax_idPrax', 'Dokumenty_idDokumenty']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Prax_has_Dokumenty');
    }
}
