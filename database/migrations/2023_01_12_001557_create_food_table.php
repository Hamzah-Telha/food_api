<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('imgPath');
            $table->decimal('price');
            $table->string('description');
            $table->decimal('stars');
            $table->string('location');
            $table->string('createdAt');
            $table->string('updatedAt');
            $table->decimal('prtypeIdice');
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
        Schema::dropIfExists('food');
    }
};
