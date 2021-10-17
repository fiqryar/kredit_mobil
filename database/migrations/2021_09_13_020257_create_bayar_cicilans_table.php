<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBayarCicilansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bayar_cicilans', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('kode_cicilan', 20)->primary();
            $table->string('kode_kredit', 20);
            $table->date('tgl_cicilan');
            $table->float('jml_cicilan');
            $table->integer('cicilan_ke');
            $table->float('cicilan_sisa_ke');
            $table->float('cicilan_sisa_harga');
            $table->timestamps();
            $table->foreign('kode_kredit')->references('kode_kredit')->on('kredits');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bayar_cicilans');
    }
}
