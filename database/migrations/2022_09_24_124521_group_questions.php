<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GroupQuestions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_group_questions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user_dil');
            $table->integer('id_type')->default(1);
            $table->integer('id_status')->default(1);
            $table->string('title');
            $table->text('question');
            $table->string('views')->default(0);
            $table->integer('like')->default(0);
            $table->integer('dislike')->default(0);
            $table->integer('votes')->default(0);
            $table->string('image')->nullable();
            $table->string('path_img')->nullable();
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
        Schema::dropIfExists('tbl_group_questions');
    }
}
