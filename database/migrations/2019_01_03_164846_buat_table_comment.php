<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTableComment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment', function(Blueprint $table)
            {
            $table->unsignedInteger('id_forum_comment');
            $table->foreign('id_forum_comment')->references('id_forum')->on('forum')->onDelete('CASCADE');
            $table->unsignedInteger('id_user_comment');
            $table->foreign('id_user_comment')->references('id_user')->on('user')->onDelete('CASCADE');
            $table->text('komentar');
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
        Schema::dropIfExists('comment');
    }
}
