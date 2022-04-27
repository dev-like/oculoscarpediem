<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFalaconoscoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faleconosco', function (Blueprint $table) {
          $table->increments('id');
          $table->string('endereco', 255)->nullable();
          $table->string('telefone1', 20)->nullable();
          $table->string('telefone2', 20)->nullable();
          $table->string('email', 255)->nullable();;
          $table->string('facebook', 255)->nullable();
          $table->string('instagram', 255)->nullable();
          $table->string('linkedin', 255)->nullable();
          $table->string('youtube', 255)->nullable();
          $table->string('funcionamento', 255)->nullable();
          $table->string('imagem1', 255)->nullable();
          $table->string('imagem2', 255)->nullable();
          
          $table->timestamps();
          $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quemsomos');
    }
}
