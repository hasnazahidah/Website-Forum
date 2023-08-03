<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCategoryanggota extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_anggota', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 60);
            $table->timestamps();
        });

        Schema::table('post_anggota', function(Blueprint $table){
          $table->foreign('id_category_anggota')->references('id')->on('category_anggota')->onDelete('cascade')->onUpdate('cascade');
        });
    }


    public function down()
    {
      Schema::table('post_anggota', function(Blueprint $table){
        $table->dropForeign('post_anggota_id_category_anggota_foreign');
      });

        Schema::dropIfExists('category_anggota');
    }
}
