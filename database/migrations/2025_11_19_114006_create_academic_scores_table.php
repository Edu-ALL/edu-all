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
        Schema::create('academic_scores', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['academic', 'sat', 'competition'])->default('academic');
            $table->string('name');
            $table->string('score_raw')->nullable();     // contoh: 5, B, 68, C, 7
            $table->string('score_final')->nullable();   // contoh: 6, B, 71, A*
            $table->string('subject')->nullable();
            $table->string('point')->nullable();
            $table->string('image')->nullable();
            $table->string('medal')->nullable();
            $table->string('grade')->nullable();
            $table->string('school')->nullable();
            $table->integer('order')->default(0);        // kolom untuk sorting manual
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
        Schema::dropIfExists('academic_scores');
    }
};
