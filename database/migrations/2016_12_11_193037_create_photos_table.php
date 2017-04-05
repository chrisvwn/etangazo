<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreatePhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create
        ('photos', 
            function (Blueprint $table)
            {
                $table->increments('id');
                $table->string('filename');
                $table->string('photoable_id');
                $table->string('photoable_type');
                $table->unsignedInteger('user_id')->references('id')->on('users');
                $table->timestampsTz();
                $table->SoftDeletes();
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('photos');
    }
}
