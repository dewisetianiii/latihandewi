<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableMotor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Motor', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('motor_kode', 10);
            $table->string('motor_merk');
            $table->string('motor_type');
            $table->string('motor_warna_pilihan');
            $table->double('motor_harga');
            $table->longblob('motor_gambar');
            $table->timestamps();
            $table->primary('motor_kode');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Motor');
    }
}
