<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombreUnidad');
            $table->text('descripUnidad');
            $table->string('url_video', 300);
            $table->integer('id_Tema');
            $table->timestamps();
        });

        Schema::create('temas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('num_unidad');
            $table->text('nombre_Tema');
            $table->text('descripcion_Tema');
            $table->text('imagen');
            $table->string('url_video', 300);
            $table->timestamps();
//            $table->unsignedBigInteger('id_Unidad');
//            $table->foreign('id_Unidad')->references('id')->on('unidads');
//            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unidads');
    }
}
