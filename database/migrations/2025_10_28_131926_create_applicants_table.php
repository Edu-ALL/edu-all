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
        Schema::create('applicants', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('job_id');
            $table->string('name');
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('cv_path')->nullable(); // path ke file CV

            // Screen questions & yes/no answers
            $table->string('screen_question_1')->nullable();
            $table->enum('screen_answer_1', ['yes', 'no'])->nullable();
            $table->string('screen_question_2')->nullable();
            $table->enum('screen_answer_2', ['yes', 'no'])->nullable();
            $table->string('screen_question_3')->nullable();
            $table->enum('screen_answer_3', ['yes', 'no'])->nullable();

            $table->timestamps();

            $table->foreign('job_id')->references('id')->on('tb_career')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applicants');
    }
};
