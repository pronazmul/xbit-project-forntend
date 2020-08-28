<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserResistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_resistration', function(Blueprint $table){
            $table -> increments('id');
            $table -> string('name');
            $table -> string('email');
            $table -> string('mobile');
            $table -> string('pass');
            $table -> string('bkashno');
            $table -> string('bkashtrxid');
            $table -> string('status');
            $table -> string('approval');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_resistration');
    }
}
