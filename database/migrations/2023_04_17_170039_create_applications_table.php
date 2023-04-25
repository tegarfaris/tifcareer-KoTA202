<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->bigInteger('job_id')->unsigned()->nullable();
            $table->bigInteger('applicant_id')->unsigned()->nullable();
            $table->bigInteger('video_resume_id')->unsigned()->nullable();
            $table->float('score')->nullable();
            $table->integer('rank')->nullable();
            $table->string('status',100)->nullable();
            $table->json('education')->nullable();
            $table->json('work_experience')->nullable();
            $table->json('skill')->nullable();
            $table->json('interest_area')->nullable();
            $table->timestamp('send_date')->nullable();
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
};
