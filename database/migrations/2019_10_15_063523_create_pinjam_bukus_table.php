<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePinjamBukusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pinjam_bukus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->tinyInteger('status');
            $table->date('tgl_pinjam');
            $table->date('tgl_kembali');
            $table->integer('buku_id');
            $table->integer('peminjam_id');
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
        Schema::dropIfExists('pinjam_bukus');
    }
}
