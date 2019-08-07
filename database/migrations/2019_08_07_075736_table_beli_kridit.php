<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableBeliKridit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Beli_kridit', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kridit_kode',10);
            $table->foreign('pembeli_no_ktp')->references('pembeli_no_ktp')->on('pembeli')->onDelete('cascade');
            $table->foreign('paket_kode')->references('paket_kode')->on('kridit_paket')->onDelete('cascade');
            $table->foreign('motor_kode')->references('motor_kode')->on('motor')->onDelete('cascade');
            $table->date('kridit_tanggal');
            $table->boolean('fotokopi_ktp');
            $table->boolean('foto_kk');
            $table->boolean('fotokopi_slip_gaji');
            $table->timestamps();
            $table->primary('kridit_kode');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Beli_kridit');
    }
}
