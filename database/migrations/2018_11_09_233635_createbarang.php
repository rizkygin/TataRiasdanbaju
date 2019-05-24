<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Createbarang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('barang',function(Blueprint $table){
           $table->increments('id');
           $table->string('nama_lapak')->references('nama_lapak')->on('lapak');
           $table->String('nama_barang');
           $table->integer('harga_barang');
           $table->integer('id_lapak')->references('id_lapak')->on('lapak');
           $table->integer('id_transaksi')->references('id_tranksaksi')->on('transaksi');
           $table->bigInteger('id_cus')->references('id_cus')->on('customer');
           $table->timestamps();
           $table->string('file');
         });
     }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         Schema::dropIfExists('model_tatarias');
    }
}
