<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('address')->unique();
            $table->string('area');
            $table->string('number')->unique();
            $table->string('hp');
            $table->string('img')->nullable()->unique();
            $table->string('highway');
            $table->string('price');
            $table->string('card');
            $table->string('off');
            $table->string('workTime');
            $table->integer('cart');
            $table->integer('dish');
            $table->integer('spa');
            $table->integer('rental');
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
        Schema::dropIfExists('courses');
    }
}
