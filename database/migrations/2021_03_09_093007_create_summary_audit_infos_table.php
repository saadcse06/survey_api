<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSummaryAuditInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('summary_audit_infos', function (Blueprint $table) {
            $table->id();
            $table->string('INSTITUTE_ID',15)->unsigned();
            $table->foreign('INSTITUTE_ID')->references('INSTITUTE_ID')->on('INSTITUTES');
            $table->string('REGULAR_AUDIT_YN',1)->nullable();
            $table->string('DIA_AUDIT_YN',1)->nullable();
            $table->integer('LAST_DIA_AUDIT_YEAR',4)->nullable();
            $table->string('AUDIT_OBJECTION_YN',1)->nullable();
            $table->integer('AUDIT_OBJECTION_NO',2)->nullable();
            $table->integer('AUDIT_OBJECTION_AMT',4)->nullable();
            $table->string('AUDIT_OBJECTION_SUBJECT',200)->nullable();
            $table->string('REVENUE_AUDIT_YN',1)->nullable();
            $table->string('ANUAL_PLAN_YN',1)->nullable();
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
        Schema::dropIfExists('summary_audit_infos');
    }
}
