<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiketOlaragasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_olaragas', function (Blueprint $table) {
            $table->bigIncrements('id_tiket_olaraga');
            $table->string('code');
            $table->string('title');
            $table->string('tgl_start');
            $table->string('waktu_start');
            $table->string('lokasi_start');
            $table->string('tribun');
            $table->string('juml_cetak');
            $table->string('url_icon');
            $table->string('harga');
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
        Schema::dropIfExists('tiket_olaragas');
    }
}
