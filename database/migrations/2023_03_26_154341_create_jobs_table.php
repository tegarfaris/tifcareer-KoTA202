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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->nullable();
            $table->foreignId('assignment_video_resume_id')->nullable();
            $table->foreignId('job_category_id')->nullable();
            $table->string('title',100)->nullable();
            $table->string('job_position')->nullable();
            $table->longText('qualification')->nullable();
            $table->longText('job_desc')->nullable();
            $table->string('location',150)->nullable();
            $table->string('salary',20)->nullable();
            $table->string('status',100)->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
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
        Schema::dropIfExists('jobs');
    }
};
