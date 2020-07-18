<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTumbuhansTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tumbuhans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->longtext('deskripsi');
            $table->longtext('khasiat');
            $table->string('musim');
            $table->string('habitat');
            $table->string('lokasi');
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
        Schema::drop('tumbuhans');
    }
}
