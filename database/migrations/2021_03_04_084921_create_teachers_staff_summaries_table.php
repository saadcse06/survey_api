<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersStaffSummariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers_staff_summaries', function (Blueprint $table) {
            $table->id();
            $table->string('INSTITUTE_ID',15)->unsigned();
            $table->foreign('INSTITUTE_ID')->references('INSTITUTE_ID')->on('INSTITUTES');
            $table->string('EDUCATION_LEVEL_ID',2);
            $table->foreign('EDUCATION_LEVEL_ID')->references('EDUCATION_LEVEL_ID')->on('lookup_education_levels');
            $table->string('DESIGNATION_ID',3)->unsigned();
            $table->foreign('DESIGNATION_ID')->references('DESIGNATION_ID')->on('DESIGNATIONS');
            $table->string('DESIGNATION_COL_ID',3)->unsigned();
            $table->foreign('DESIGNATION_COL_ID')->references('DESIGNATION_COL_ID')->on('DESIGNATIONS_COLLEGE');
            $table->integer('APPROVED_POST_NO',3)->nullable();
            $table->integer('TEACHERS_IN_SERVICE',3)->nullable();
            $table->integer('FEMALE_TEACHERS_IN_SERVICE',3)->nullable();
            $table->integer('MPO_TEACHERS',3)->nullable();
            $table->integer('FEMALE_MPO_TEACHERS',3)->nullable();
            $table->integer('BLANK_POST_NO',3)->nullable();
            $table->integer('BRANCE_TEACHER',3)->nullable();
            $table->integer('PARTTIME_TEACHER',3)->nullable();
            $table->integer('NTRC_TEACHER',3)->nullable();
            $table->integer('NTRC_BLANK_POST',3)->nullable();
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
        Schema::dropIfExists('teachers_staff_summaries');
    }
}
