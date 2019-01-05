<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTablePerjanjian extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perjanjian', function(Blueprint $table)
        {
            $table->increments('id_perjanjian');

            $table->date('tgl_janji');
            $table->unsignedInteger('id_user_client');
            $table->foreign('id_user_client')->references('id_user')->on('user')->onDelete('CASCADE');
            $table->datetime('waktu');
            $table->unsignedInteger('id_user_konselor');
            $table->foreign('id_user_konselor')->references('id_user')->on('user')->onDelete('CASCADE');
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
                Schema::dropIfExists('perjanjian');

    }
}
