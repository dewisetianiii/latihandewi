<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablePembeli extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pembeli', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pembeli_no_ktp');
            $table->string('pembeli_nama');
            $table->string('pembeli_alamat');
            $table->integer('pembeli_telepon');
            $table->integer('pembeli_hp');
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
        Schema::dropIfExists('Pembeli');
    }
}
