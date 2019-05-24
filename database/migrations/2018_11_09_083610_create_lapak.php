<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLapak extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lapak', function (Blueprint $table) {
            $table->increments('id_lapak');
            $table->text('nama_lapak');
            $table->string('alamat');
            $table->integer('id_barang')->references('id_barang')->on('barang');
            $table->String('file')->default('default.jpg');
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
        Schema::dropIfExists('model_lapak');
    }
}
