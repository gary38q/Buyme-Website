<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserHadiahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_hadiahs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_user');
            $table->bigInteger('nomor_wa');
            $table->string('provinsi');
            $table->string('nomor_undian');
            $table->string('hadiah');
            $table->date('tanggal_beli');
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
        Schema::dropIfExists('user_hadiahs');
    }
}
