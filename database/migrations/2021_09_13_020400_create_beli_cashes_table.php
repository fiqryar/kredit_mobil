<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeliCashesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beli_cashes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('kode_cash', 20)->primary();
            $table->string('ktp_pembeli', 50);
            $table->string('kode_mobil', 20);
            $table->date('cash_tgl');
            $table->float('cash_bayar');
            $table->timestamps();
            $table->foreign('ktp_pembeli')->references('ktp_pembeli')->on('pembelis');
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
        Schema::dropIfExists('beli_cashes');
    }
}
