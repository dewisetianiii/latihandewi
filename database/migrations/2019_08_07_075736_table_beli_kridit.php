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
            $table->string('kridit_kode');
            $table->unsignedBigInteger('pembeli_no_ktp');
            $table->foreign('pembeli_no_ktp')->references('id')->on('Pembeli')->onDelete('CASCADE');
            $table->unsignedBigInteger('paket_kode');
            $table->foreign('paket_kode')->references('id')->on('Kridit_paket')->onDelete('CASCADE');
            $table->unsignedBigInteger('motor_kode');
            $table->foreign('motor_kode')->references('id')->on('Motor')->onDelete('CASCADE');
            $table->date('kridit_tanggal');
            $table->boolean('fotokopi_ktp');
            $table->boolean('fotokopi_kk');
            $table->boolean('fotokopi_slip_gaji');
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
        Schema::dropIfExists('Beli_kridit');
    }
}
