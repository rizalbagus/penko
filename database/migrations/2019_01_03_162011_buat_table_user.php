<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTableUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
   {
        Schema::create('user', function(Blueprint $table)
        {
            $table->increments('id_user');
            $table->string('username');
            $table->string('password');
            $table->string('nama');
            $table->text('alamat');                        
            // $table->enum('status',['client','konselor']);
            $table->string('status');
            $table->string('longitude');
            $table->string('latitude');
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
        Schema::dropIfExists('user');
    }
}
