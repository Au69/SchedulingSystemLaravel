<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurriculumsTable extends Migration
{
    public function up()
    {
        Schema::create('curriculums', function (Blueprint $table) {
            $table->id();
            $table->integer('curriculum_year');
            $table->string('program_code');
            $table->string('program_name');
            $table->string('course_code');
            $table->string('course_name');
            $table->decimal('lec')->nullable();
            $table->decimal('lab')->nullable();
            $table->decimal('units')->nullable();
            $table->string('level');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('curriculums');
    }
}