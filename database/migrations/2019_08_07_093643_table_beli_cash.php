<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableBeliCash extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Beli_cash', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cash_kode');
            $table->unsignedBigInteger('pembeli_no_ktp');
            $table->foreign('pembeli_no_ktp')->references('id')->on('Pembeli')->onDelete('CASCADE');
            $table->unsignedBigInteger('motor_kode');
            $table->foreign('motor_kode')->references('id')->on('Motor')->onDelete('CASCADE');
            $table->date('cash_tanggal');
            $table->double('cash_bayar');
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
        Schema::dropIfExists('Beli_cash');
    }
}
