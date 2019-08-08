<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableBayarCicilan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Bayar_cicilan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cicilan_kode');
            $table->unsignedBigInteger('kridit_kode');
            $table->foreign('kridit_kode')->references('id')->on('Beli_kridit')->onDelete('CASCADE');
            $table->date('cicilan_tanggal');
            $table->integer('cicilan_jumlah');
            $table->integer('cicilan_ke');
            $table->integer('cicilan_sisa_ke');
            $table->double('cicilan_sisa_harga');
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
        Schema::dropIfExists('Bayar_cicilan');
    }
}
