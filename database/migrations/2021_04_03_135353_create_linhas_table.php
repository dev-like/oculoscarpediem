<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinhasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('linha', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('nome', 255);
            $table->string('slug');
            $table->string('imagem', 255)->nullable();
            $table->string('descricao');

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
        Schema::dropIfExists('linha');
    }
}
