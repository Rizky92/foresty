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
            $table->longtext('deskripsi')->nullable();
            $table->string('khasiat')->nullable();
            $table->string('musim')->nullable();
            $table->string('habitat')->nullable();
            $table->string('lokasi')->nullable();
            $table->string('img_path')->nullable();
            $table->string('slug');
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
