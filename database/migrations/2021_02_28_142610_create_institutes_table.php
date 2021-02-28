<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstitutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institutes', function (Blueprint $table) {
            $table->id();
            $table->string('INSTITUTE_ID',15)->unsigned()->unique();
            $table->string('EIIN',6);
            $table->foreign('EIIN')->references('EIIN')->on('users');
            $table->integer('LATITUDE_DEG',10)->nullable();
            $table->integer('LATITUDE_MIN',10)->nullable();
            $table->integer('LATITUDE_SEC',10)->nullable();
            $table->integer('LONGITUDE_DEG',10)->nullable();
            $table->integer('LONGITUDE_MIN',10)->nullable();
            $table->integer('LONGITUDE_SEC',10)->nullable();
            $table->string('INSTITUTE_NAME_NEW',150)->nullable();
            $table->string('INSTITUTE_NAME_BANGLA',300)->nullable();
            $table->string('LOCATION',100)->nullable();
            $table->string('POST_OFFICE',50)->nullable();
            $table->string('POST_CODE',50)->nullable();
            $table->string('UNION_ID',9)->nullable();
            $table->string('MAUZA_ID',12)->nullable();
            $table->string('THANA_ID',7)->nullable();
            $table->string('DISTRICT_ID',5)->nullable();
            $table->string('DIVISION_ID',3)->nullable();
            $table->string('MOBPHONE',11)->nullable();
            $table->string('TELEPHONE',15)->nullable();
            $table->string('MOBPHONE_ALTERNATE',11)->nullable();
            $table->string('E_MAIL',50)->nullable();
            $table->string('WEB_SITE',50)->nullable();
            $table->string('EC_NATIONAL_CODE',15)->nullable();
            $table->string('EC_DISTRICT_CODE',15)->nullable();
            $table->string('EDUCATION_LEVEL_ID',2)->nullable();
            $table->string('ARTS_GROUP',2)->nullable();
            $table->string('SCIENCE_GROUP',2)->nullable();
            $table->string('COMMERCE_GROUP',2)->nullable();
            $table->string('ARTS_GROUP_COL',2)->nullable();
            $table->string('SCIENCE_GROUP_COL',2)->nullable();
            $table->string('COMMERCE_GROUP_COL',2)->nullable();
            $table->string('SOCIAL_SCIENCE_GROUP',2)->nullable();
            $table->string('ISLAMIC_STADIES_GROUP',2)->nullable();
            $table->string('MUSIC_GROUP',2)->nullable();
            $table->string('HOME_ECONOMIC_GROUP',2)->nullable();
            $table->string('OTHER_GROUP',2)->nullable();
            $table->string('TECHNICAL_BRANCH_TYPE_AGRO',2)->nullable();
            $table->string('TECHNICAL_BRANCH_TYPE_FISH',2)->nullable();
            $table->string('TECHNICAL_BRANCH_TYPE',2)->nullable();
            $table->string('TECHNICAL_BRANCH_TYPE_BM',2)->nullable();
            $table->string('TECHNICAL_BRANCH_TYPE_HSCVOC',2)->nullable();
            $table->date('ESTABLISH_DATE')->nullable();
            $table->string('ENGLISH_VER_YN',1)->nullable();
            $table->string('MANAGEMENT',1)->nullable();
            $table->date('NATIONALIZATION_DATE')->nullable();
            $table->string('FOR_WHOM',1)->nullable();
            $table->string('GEOGRAPHICAL_STATUS',2)->nullable();
            $table->string('AREA_STATUS1',2)->nullable();
            $table->string('ADMIN_UNIT_COMMUNICATION',2)->nullable();
            $table->string('NEAREST_ADMIN_UNIT_DISTANT',4)->nullable();
            $table->string('NEAREST_INST_DISTANT',4)->nullable();
            $table->string('BRANCH_YN',2)->nullable();
            $table->integer('BRANCH_NO',5)->nullable();
            $table->string('CAMPUSYN',3)->nullable();
            $table->string('ATTACH_INST_YN',1)->nullable();
            $table->string('ATTACH_INST_TYPE',5)->nullable();
            $table->string('MPO_STATUS',1)->nullable();
            $table->string('TECHNICAL_BRANCH_MPO_STATUS',1)->nullable();
            $table->integer('MEMBER_TOTAL',5)->nullable();
            $table->integer('MEMBER_FEMALE',5)->nullable();
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
        Schema::dropIfExists('institutes');
    }
}
