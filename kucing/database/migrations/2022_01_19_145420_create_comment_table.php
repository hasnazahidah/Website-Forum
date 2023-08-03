<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('comment', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('post_anggota_id')->unsigned();
          $table->integer('user_id')->unsigned();
          $table->text('message');
          $table->timestamps();

          $table->foreign('post_anggota_id')->references('id')->on('post_anggota')->onDelete('CASCADE');
          $table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE');
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
