<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('reg_number')->nullable();
            $table->string('incorrect_name')->nullable();
            $table->string('correct_name')->nullable();
            $table->string('efemale')->nullable();
            $table->string('father')->nullable();
            $table->string('mother')->nullable();
            $table->string('mobile')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('essc')->nullable();
            $table->date('birthdate')->nullable();
            $table->string('birthplace')->nullable();
            $table->date('deathhdate')->nullable();
            $table->string('deathplace')->nullable();
            $table->string('emale')->nullable();
            $table->string('app_photo')->nullable();
            $table->string('certificate_type')->nullable();
            $table->string('exam')->nullable();
            $table->string('year')->nullable();
            $table->string('institute')->nullable();
            $table->string('board')->nullable();
            $table->string('country')->nullable();
            $table->string('group')->nullable();
            $table->string('result')->nullable();
            $table->string('sub1')->nullable();
            $table->string('sub2')->nullable();
            $table->string('sub3')->nullable();
            $table->string('sub4')->nullable();
            $table->string('sub5')->nullable();
            $table->string('sub6')->nullable();
            $table->string('sub7')->nullable();
            $table->string('sub8')->nullable();
            $table->string('sub9')->nullable();
            $table->string('sub10')->nullable();
            $table->string('sub11')->nullable();
            $table->string('sub12')->nullable();
            $table->string('birth_certificate')->nullable();
            $table->string('death_certificate')->nullable();
            $table->string('citizen_certificate')->nullable();
            $table->string('reg_card')->nullable();
            $table->string('admit_card')->nullable();
            $table->string('marksheet')->nullable();
            $table->string('ssc_certificate')->nullable();
            $table->string('board_testimonial')->nullable();
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
        Schema::dropIfExists('applications');
    }
}
