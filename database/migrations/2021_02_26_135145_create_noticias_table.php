<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoticiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticias', function (Blueprint $table) {
            $table->bigIncrements('noticia_id');
            $table->unsignedBigInteger('noticiatipo_id_tipo');
            $table->string('titulo');
            $table->string('artigo');
            $table->text('news_short_description');
            $table->text('news_full_content');
            $table->text('image_noticia');
            $table->unsignedBigInteger('user');
            $table->unsignedBigInteger('categoria');
            $table->timestamps();
            $table->foreign('noticiatipo_id_tipo')->references('id_tipo')->on('noticia_tipos')->onUpdate('CASCADE');
            $table->foreign('user')->references('id')->on('users')->onUpdate('CASCADE');
            $table->foreign('categoria')->references('cat_id')->on('categorias')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('noticias');
    }
}
