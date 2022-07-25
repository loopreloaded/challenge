<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeatherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weather', function (Blueprint $table) {
            $table->id();
            $table->string('city')->unique();
            $table->string('observation_time',8);
            $table->tinyInteger('temperature',false);
            $table->smallInteger('weather_code',false,true);
            $table->string('weather_icons'); //
            $table->string('weather_descriptions'); //
            $table->smallInteger('wind_speed',false,true);
            $table->smallInteger('wind_degree',false,true);
            $table->string('wind_dir',5);
            $table->smallInteger('pressure',false,true);
            $table->decimal('precip',8,2,true);
            $table->tinyInteger('humidity',false,true);
            $table->tinyInteger('cloudcover',false,true);
            $table->tinyInteger('feelslike',false);
            $table->tinyInteger('uv_index',false,true);
            $table->tinyInteger('visibility',false,true);
            $table->string('is_day',3);
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
        Schema::dropIfExists('weather');
    }
}
