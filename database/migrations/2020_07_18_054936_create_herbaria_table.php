<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHerbariaTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('herbaria', function (Blueprint $table) {
            $table->increments('id');
            $table->string('latin');
            $table->string('collector');
            $table->integer('number');
            $table->string('prefix');
            $table->string('img_path');
            $table->integer('country_id')->unsigned();
            $table->integer('family_id')->unsigned();
            $table->integer('gazetteer_id')->unsigned();
            $table->integer('major_area_id')->unsigned();
            $table->integer('minor_area_id')->unsigned();
            $table->integer('treetexa_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('country_id')->references('id')->on('countries');
            $table->foreign('family_id')->references('id')->on('families');
            $table->foreign('gazetteer_id')->references('id')->on('gazetteers');
            $table->foreign('major_area_id')->references('id')->on('major_areas');
            $table->foreign('minor_area_id')->references('id')->on('minor_areas');
            $table->foreign('treetexa_id')->references('id')->on('treetexas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('herbaria');
    }
}
