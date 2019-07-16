<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewpendaftaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_pendaftarans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image')->nullable();
            $table->string('divisi');
            $table->string('sebab_pengajuan');
            $table->string('jumlah');
            $table->string('pembukaan_rek');
            $table->string('penutupan_rek');
            $table->string('gaji');
            $table->string('pihak_bertanggungjwb');
            $table->string('status')->nullable();
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
        Schema::dropIfExists('newpendaftarans');
    }
}
