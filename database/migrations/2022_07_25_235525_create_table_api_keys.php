<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableApiKeys extends Migration
{
    public function up()
    {
        Schema::create('api_keys', function (Blueprint $table) {
            $table->id();
            $table->string('api_key',150)->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('api_keys');
    }
}
