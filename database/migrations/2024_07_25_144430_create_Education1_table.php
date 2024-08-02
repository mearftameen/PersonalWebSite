<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducation1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Education1', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Education_name')->nullable();
            $table->date('Education_date')->nullable();
            $table->date('Education_end_date')->nullable();
            $table->string('Education_work')->nullable();
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
        Schema::dropIfExists('Education1');
    }
}
