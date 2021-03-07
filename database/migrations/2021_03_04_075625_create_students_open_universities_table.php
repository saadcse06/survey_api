<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsOpenUniversitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students_open_universities', function (Blueprint $table) {
            $table->id();
            $table->string('INSTITUTE_ID',15)->unsigned();
            $table->foreign('INSTITUTE_ID')->references('INSTITUTE_ID')->on('INSTITUTES');
            $table->string('CLASS_ID',4);
            $table->foreign('CLASS_ID')->references('CLASS_ID')->on('classes');
            $table->integer('ADMIT_YEAR',4)->nullable();
            $table->integer('TOTAL_STUDENT',5)->nullable();
            $table->integer('FEMALE_STUDENT',5)->nullable();
            $table->integer('NINE_TOTAL',5)->nullable();
            $table->integer('NINE_FEMALE',5)->nullable();
            $table->integer('TEN_TOTAL',5)->nullable();
            $table->integer('TEN_FEMALE',5)->nullable();
            $table->integer('ELEVEN_TOTAL',5)->nullable();
            $table->integer('ELEVEN_FEMALE',5)->nullable();
            $table->integer('TWELVE_TOTAL',5)->nullable();
            $table->integer('TWELVE_FEMALE',5)->nullable();
            $table->integer('HONOURS_PASS',5)->nullable();
            $table->integer('HONOURS_PASS_FEMALE',5)->nullable();
            $table->integer('HONOURS',5)->nullable();
            $table->integer('HONOURS_FEMALE',5)->nullable();
            $table->integer('MASTERS',5)->nullable();
            $table->integer('MASTERS_FEMALE',5)->nullable();
            $table->integer('OTHERS',5)->nullable();
            $table->integer('OTHERS_FEMALE',5)->nullable();
            $table->integer('YEAR',4)->nullable();
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
        Schema::dropIfExists('students_open_universities');
    }
}
