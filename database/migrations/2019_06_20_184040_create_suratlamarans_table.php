<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuratlamaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suratlamarans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image')->nullable();
            $table->string('nama_lengkap');
            $table->string('keahlian');
            $table->string('linkedin');
            $table->string('github');
            $table->string('gitlab');
            $table->string('divisi_lamaran');
            $table->string('files')->nullable();
            $table->string('status_test_satu')->nullable();
            $table->string('status_test_dua')->nullable();
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
        Schema::dropIfExists('suratlamarans');
    }
}
