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
            $table->date('collected_date');
            $table->integer('number');
            $table->string('prefix');
            $table->integer('country_id')->unsigned();
            $table->integer('family_id')->unsigned();
            $table->integer('gazetteer_id')->unsigned();
            $table->integer('majore_area_id')->unsigned();
            $table->integer('minore_area_id')->unsigned();
            $table->integer('treetexa_id')->unsigned();
            $table->integer('flora_id')->unsigned();
            $table->string('img_path');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('country_id')->references('id')->on('countries');
            $table->foreign('family_id')->references('id')->on('families');
            $table->foreign('gazetteer_id')->references('id')->on('gazetteers');
            $table->foreign('majore_area_id')->references('id')->on('majore_areas');
            $table->foreign('minore_area_id')->references('id')->on('minore_areas');
            $table->foreign('treetexa_id')->references('id')->on('treetexas');
            $table->foreign('flora_id')->references('id')->on('floras');
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
