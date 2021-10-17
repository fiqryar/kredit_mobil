<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaketKreditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paket_kredits', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('kode_paket', 20)->primary();
            $table->float('harga_paket');
            $table->float('uang_muka');
            $table->integer('paket_iml_cicilan');
            $table->float('bunga');
            $table->float('nilai_cicilan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paket_kredits');
    }
}
