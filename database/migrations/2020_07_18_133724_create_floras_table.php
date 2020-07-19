<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlorasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('floras', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->longtext('deskripsi');
            $table->longtext('khasiat');
            $table->string('musim');
            $table->string('habitat');
            $table->string('lokasi');
            $table->string('img_path');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('floras');
    }
}
