<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pages', function (Blueprint $table) {

            $table->increments('id');
            $table->string('name','50');
            $table->string('url','100');
            $table->string('keywords','255');
            $table->string('description');
            $table->enum('static',['1','0'],'0');
            $table->longText('content');
            $table->enum('publish',['1','0'],'0');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pages', function (Blueprint $table) {
            //
        });
    }
}
