<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstitutesIctInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institutes_ict_infos', function (Blueprint $table) {
            $table->id();
            $table->string('INSTITUTE_ID',15)->unsigned();
            $table->foreign('INSTITUTE_ID')->references('INSTITUTE_ID')->on('INSTITUTES');
            $table->string('COMPUTER_TEACHING_YN',1)->nullable();
            $table->string('COMP_TEACHER_YN',1)->nullable();
            $table->string('COMP_TEACHER_QUAL',2)->nullable();
            $table->string('COMP_TEACHER_OTHER_EDU',2)->nullable();
            $table->string('COMP_TRAINING_TYPE',2)->nullable();
            $table->string('TEA_SOCITY_MEMBER_TOTAL',1)->nullable();
            $table->integer('TEA_SOCITY_MEMBER_TOTAL',3)->nullable();
            $table->integer('TEA_SOCITY_MEMBER_FEMALE',3)->nullable();
            $table->integer('COMP_LAB_DAILY_USE_HR',3)->nullable();
            $table->string('DIGITAL_ATTENDANCE_STD',1)->nullable();
            $table->string('DIGITAL_ATTENDANCE_STAFF',1)->nullable();
            $table->string('DIGITAL_ATTENDANCE_NONE',1)->nullable();
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
        Schema::dropIfExists('institutes_ict_infos');
    }
}
