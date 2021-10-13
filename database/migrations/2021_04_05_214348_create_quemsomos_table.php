<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuemsomosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quemsomos', function (Blueprint $table) {
          $table->increments('id');
          $table->string('razaosocial', 191)->nullable();
          $table->string('nomefantasia', 191)->nullable();;
          $table->string('cnpj', 18)->nullable();
          $table->string('ie', 45)->nullable();
          $table->text('quemsomos')->nullable();
          $table->string('email', 255)->nullable();;
          $table->string('telefone1', 20)->nullable();
          $table->string('telefone2', 20)->nullable();

          $table->string('end1', 255)->nullable();
          $table->string('facebook', 255)->nullable();
          $table->string('instagram', 255)->nullable();
          $table->string('linkedin', 255)->nullable();
          $table->string('missao', 500)->nullable();
          $table->string('visao', 1000)->nullable();
          $table->string('valores', 500)->nullable();
          $table->string('imagem1', 255)->nullable();
          $table->string('imagem2', 255)->nullable();
          $table->string('youtube', 255)->nullable();

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
