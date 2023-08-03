<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCategory extends Migration
{

    public function up()
    {
        Schema::create('Category', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 60);
            $table->timestamps();
        });

        Schema::table('postingan', function(Blueprint $table){
          $table->foreign('id_Category')->references('id')->on('Category')->onDelete('cascade')->onUpdate('cascade');
        });
    }


    public function down()
    {
      Schema::table('postingan', function(Blueprint $table){
        $table->dropForeign('postingan_id_Category_foreign');
      });


        Schema::dropIfExists('Category');
    }
}
