<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTableForum extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('forum', function(Blueprint $table)
        {
            $table->increments('id_forum');
            $table->string('judul_forum');
            $table->text('deskripsi');
            $table->unsignedInteger('id_user_client_forum');
            $table->foreign('id_user_client_forum')->references('id_user')->on('user')->onDelete('CASCADE');
            $table->unsignedInteger('id_user_konselor_forum');
            $table->foreign('id_user_konselor_forum')->references('id_user')->on('user')->onDelete('CASCADE');
            $table->integer('status');
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
       Schema::dropIfExists('forum');
    }
}
