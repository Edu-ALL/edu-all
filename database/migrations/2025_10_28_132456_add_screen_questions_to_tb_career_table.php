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
        Schema::table('tb_career', function (Blueprint $table) {
            $table->string('screen_question_1')->nullable()->after('working_arrangement'); // ganti existing_column_name sesuai posisi
            $table->string('screen_question_2')->nullable()->after('screen_question_1');
            $table->string('screen_question_3')->nullable()->after('screen_question_2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_career', function (Blueprint $table) {
            $table->dropColumn(['screen_question_1', 'screen_question_2', 'screen_question_3']);
        });
    }
};
