<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelangganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelanggan', function (Blueprint $table) {
            $table->id();
            $table->string('id_pelanggan')->unique();
            $table->string('nik')->unique();
            $table->string('nama');
            $table->string('alamat');
            $table->unsignedBigInteger('id_paket');
            $table->foreign('id_paket')->references('id')->on('paket');
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
        Schema::dropIfExists('pelanggan');
    }
}
