<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMotorcyclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motorcycles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_category');
            $table->string('registration_no');
            $table->string('name');
            $table->smallInteger('year');
            $table->string('engine');
            $table->smallInteger('capacity');
            $table->string('dimensions');
            $table->smallInteger('weight');
            $table->string('feature1');
            $table->string('feature2');
            $table->string('feature3');
            $table->string('feature4');
            $table->string('color1');
            $table->string('color2');
            $table->string('color3');
            $table->string('color4');
            $table->string('imagecolor1');
            $table->string('imagecolor2');
            $table->string('imagecolor3');
            $table->string('imagecolor4');
            $table->string('imageLogo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('motorcycles');
    }
}
