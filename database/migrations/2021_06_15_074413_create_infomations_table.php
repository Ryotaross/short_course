<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfomationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infomations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('course_id')->unique();
            //$table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
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
        Schema::dropIfExists('infomations');
    }
}
