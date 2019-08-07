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
            $table->string('cash_kode', 10);
            $table->foreign('pembeli_no_ktp')->references('pembeli_no_ktp')->on('pembeli')->onDelete('cascade');
            $table->foreign('motor_kode')->references('motor_kode')->on('motor')->onDelete('cascade');
            $table->date('cash_tanggal');
            $table->double('cash_bayar');
            $table->timestamps();
            $table->primary('cash_kode');
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
