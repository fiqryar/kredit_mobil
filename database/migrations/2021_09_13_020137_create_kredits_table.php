<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKreditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kredits', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('kode_kredit', 20)->primary();
            $table->string('ktp_pembeli', 50);
            $table->string('kode_paket', 20);
            $table->string('kode_mobil', 20);
            $table->date('tgl_kredit');
            $table->string('fotokopi_ktp', 50);
            $table->string('fotokopi_kk', 50);
            $table->string('fotokopi_slip_gaji', 50);
            $table->timestamps();
            $table->foreign('ktp_pembeli')->references('ktp_pembeli')->on('pembelis');
            $table->foreign('kode_paket')->references('kode_paket')->on('paket_kredits');
            $table->foreign('kode_mobil')->references('kode_mobil')->on('mobils');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kredits');
    }
}
