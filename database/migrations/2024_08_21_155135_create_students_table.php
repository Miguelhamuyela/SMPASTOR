<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('nProcess');
            $table->string('nBi')->unique();
            $table->string('father');
            $table->string('mother');
            $table->string('contact');
            $table->string('email');
            $table->date('dateBirth');
            $table->string('schoolyear');
            $table->unsignedBigInteger('fk_parishes_id');
            $table->foreign('fk_parishes_id')->references('id')->on('parishes')->onDelete('CASCADE')->onUpgrade('CASCADE');
            $table->unsignedBigInteger('fk_responsibles_id');
            $table->foreign('fk_responsibles_id')->references('id')->on('responsibles')->onDelete('CASCADE')->onUpgrade('CASCADE');
            $table->unsignedBigInteger('fk_courses_id');
            $table->foreign('fk_courses_id')->references('id')->on('courses')->onDelete('CASCADE')->onUpgrade('CASCADE');
            $table->timestamps();
            $table->softDeletes();

        });
    }


    public function down()
    {
        Schema::dropIfExists('students');
    }
}
