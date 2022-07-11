<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateSaldosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_saldos', function (Blueprint $table) {
            $table->bigIncrements('id_saldo');
            $table->unsignedBigInteger('id_user');
            $table->string("saldo");
            $table->timestamps();

            $table->foreign('id_user')->references('id_user')->on('tbl_users')->onUpdate('cascade')->onDelete('cascade');

        });

        DB::unprepared('
            CREATE TRIGGER tr_add_saldo AFTER INSERT ON tbl_saldos FOR EACH ROW
            BEGIN
                UPDATE tbl_users SET saldo = saldo + NEW.saldo 
                WHERE id_user = NEW.id_user;
            END
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('saldos');
    }
}
