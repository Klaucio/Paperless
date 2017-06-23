<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('material', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome_ficheiro');
            $table->string('titulo');
            $table->string('data');
            $table->string('estado')->nullable();
            $table->integer('disciplina_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->foreign('disciplina_id')->references('id')->on('disciplinas')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->integer('categoria_id')->unsigned();
            $table->foreign('categoria_id')->references('id')->on('categorias')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');
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
        //
        Schema::dropIfExists('materials');

    }
}
