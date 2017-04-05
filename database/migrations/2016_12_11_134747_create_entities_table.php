<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('phone');
            $table->date('dateofbirth');
            $table->unsignedInteger('age');
            $table->unsignedInteger('nationality')->references('id')->on('country');
            $table->unsignedInteger('idtype')->references('id')->on('id_type');
            $table->string('idnumber')->nullable();
            $table->unsignedInteger('gender_id')->references('id')->on('gender');
            $table->string('birth_place')->nullable();
            $table->string('languages_spoken')->nullable();
            $table->string('color_hair')->nullable()->references('id')->on('hair_colors')->onupdate('cascade');
            $table->string('color_eyes')->nullable()->references('id')->on('eye_colors')->onupdate('cascade');
            $table->unsignedInteger('height_meters')->nullable();
            $table->unsignedInteger('weight_kgs')->nullable();
            $table->string('distinguish_mark')->nullable();
            $table->string('race');
            $table->unsignedInteger('user_id')->references('id')->on('user');
            $table->timestampsTz();
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
        Schema::dropIfExists('entities');
    }
}
