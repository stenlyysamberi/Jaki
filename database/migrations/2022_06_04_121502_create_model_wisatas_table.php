<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelWisatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_wisatas', function (Blueprint $table) {
            $table->bigIncrements('id_wisata');
            $table->string('nama_dest');
            $table->string('alamat_dest');
            $table->string('alamat_maps');
            $table->string('panduan_dest');
            $table->string('tlpn_dest');
            $table->string('gambar_dest');
            $table->text('dec');


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
        Schema::dropIfExists('model_wisatas');
    }
}
