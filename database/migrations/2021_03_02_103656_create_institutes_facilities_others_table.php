<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstitutesFacilitiesOthersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institutes_facilities_others', function (Blueprint $table) {
            $table->id();
            $table->string('INSTITUTE_ID',15)->unsigned();
            $table->foreign('INSTITUTE_ID')->references('INSTITUTE_ID')->on('INSTITUTES');
            $table->string('SHAID_MENAR_YN',1)->nullable();
            $table->string('PERMANENT_ALTAR_YN',1)->nullable();
            $table->string('SOTOTA_STORE_YN',1)->nullable();
            $table->string('GAS_CONNECTION_YN',1)->nullable();
            $table->string('HAND_SANITIZER_YN',1)->nullable();
            $table->string('TOILET_PAPER_YN',1)->nullable();
            $table->string('SOAP_YN',1)->nullable();
            $table->string('BOUNDARYWALL_YN',1)->nullable();
            $table->string('BOUNDARY_STATUS',1)->nullable();
            $table->string('BOUNDARY_TYPE',1)->nullable();
            $table->integer('BOUNDARY_YEAR',4)->nullable();
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
        Schema::dropIfExists('institutes_facilities_others');
    }
}
