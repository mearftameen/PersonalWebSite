<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesAndUnesthestallsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses_and_unesthestalls', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image')->nullable();
            $table->string('date')->nullable();
            $table->string('end_date')->nullable();
            $table->integer('num_hours')->nullable();
            $table->string('name')->nullable();
            $table->string('details')->nullable();
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
        Schema::dropIfExists('courses_and_unesthestalls');
    }
}
