<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportCountriesView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
/*        Schema::create('report_countries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
*/
DB::statement( "CREATE VIEW report_countries AS
        SELECT * FROM countries WHERE name IN ('Rwanda', 'Burundi', 'Kenya', 'Uganda', 'Tanzania', 'Nigeria', 'South Africa')");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement( "DROP VIEW report_countries");
    }
}
