<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPengunjungsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pengunjungs', function (Blueprint $table) {
            $table->increments('id');
            $table->date('bulan_tanggal');
            $table->string('nama');
            $table->string('alamat');
            $table->unsignedBigInteger('no_tlp');
            $table->string('status_pengunjung');
            $table->string('keperluan');
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
        Schema::dropIfExists('data_pengunjungs');
    }
}
