<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    use SoftDeletes;
    
    public function up()
    {
        Schema::create
        ('reports', 
            function (Blueprint $table)
            {
                $table->increments('id'); 
                $table->string('title');
                $table->unsignedInteger('type')->references('id')->on('report_types');
                $table->unsignedInteger('country_id')->references('id')->on('report_countries');;
                $table->string('country_area_id')->references('id')->on('country_areas');
                $table->string('contact_name');
                $table->string('contact_phone');
                $table->string('police_station');
                $table->string('police_ref_number');
                $table->string('event_date');
                $table->longtext('description');
                $table->unsignedInteger('user_id')->references('id')->on('User');
                $table->boolean('approved')->default(false);
                $table->timestampsTz();
                $table->softDeletes();
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
        Schema::dropIfExists('reports');
    }
}
