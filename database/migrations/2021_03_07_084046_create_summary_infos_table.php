<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSummaryInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('summary_infos', function (Blueprint $table) {
            $table->id();
            $table->string('INSTITUTE_ID',15)->unsigned();
            $table->foreign('INSTITUTE_ID')->references('INSTITUTE_ID')->on('INSTITUTES');
            $table->string('TEAC_APEAR_USE',1)->nullable();
            $table->string('TEAC_SELF_APEAR_USE',1)->nullable();
            $table->string('GLOBES',1)->nullable();
            $table->string('MAPS',1)->nullable();
            $table->string('POSTER',1)->nullable();
            $table->string('MODEL',1)->nullable();
            $table->string('FLIP_CHART',1)->nullable();
            $table->string('OTHEREQU',1)->nullable();
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
        Schema::dropIfExists('summary_infos');
    }
}
