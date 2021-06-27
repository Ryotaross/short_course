<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('holes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('course_id');
            //$table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
            $table->integer('hole_number');
            $table->integer('par');
            $table->integer('yard');
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
        Schema::dropIfExists('holes');
    }
}
