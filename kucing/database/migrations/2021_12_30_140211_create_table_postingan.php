<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePostingan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postingan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 200);
            $table->integer('id_Category')->unsigned();
            $table->string('description', 10000);
            $table->string('image', 200);
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('postingan');
    }
}
