<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->bigIncrements('id_transaksis');
            $table->unsignedBigInteger("id_wisata");
            $table->unsignedBigInteger("id_tiket_olaraga");
            $table->unsignedBigInteger("id_users");
            $table->text("bayars");
            $table->integer("total");
            $table->timestamps();

            $table->foreign('id_wisata')->references('id_wisata')->on('tbl_wisatas')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_tiket_olaraga')->references('id_tiket_olaraga')->on('tbl_olaragas')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_users')->references('id_user')->on('tbl_users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksis');
    }
}
