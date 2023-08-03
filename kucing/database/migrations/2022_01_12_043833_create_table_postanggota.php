<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePostanggota extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_anggota', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 200);
            $table->integer('id_category_anggota')->unsigned();
            $table->string('description', 10000);
            $table->string('image', 200);
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('post_anggota');
    }
}
