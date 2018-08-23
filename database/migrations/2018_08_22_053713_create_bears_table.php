<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBearsTable extends Migration
{
    public function up()
    {
        Schema::create('bears', function (Blueprint $table) {

            $table->increments('id');
             $table->string('name');
             $table->string('type');
            $table->integer('danger_level');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('bears');
    }
}
