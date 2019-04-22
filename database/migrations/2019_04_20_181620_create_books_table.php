<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('cod_articulo')->nullable;            
            $table->integer('isbn10')->nullable;
            $table->integer('isbn13')->nullable;
            $table->integer('ean')->nullable;
            $table->string('titulo')->nullable;
            $table->string('subtitulo')->nullable;
            $table->string('apellido_autor')->nullable;
            $table->string('nombre_autor')->nullable;
            $table->text('biografia_autor')->nullable;
            $table->string('ilustrador')->nullable;
            $table->string('traductor')->nullable;
            $table->string('editorial')->nullable;
            $table->string('coleccion')->nullable;
            $table->string('categoria')->nullable;
            $table->string('tipo')->nullable;
            $table->string('genero')->nullable;
            $table->text('sinopsis')->nullable;
            $table->text('contratapa')->nullable;
            $table->string('metadata')->nullable;
            $table->text('portada')->nullable;
            $table->string('booktrailer')->nullable;
            $table->string('digital')->nullable;
            $table->string('idioma')->nullable;
            $table->string('formato')->nullable;
            $table->timestamp('fecha_publicacion')->nullable;
            $table->string('edicion')->nullable;
            $table->string('pvp')->nullable;
            $table->string('moneda')->nullable;
            $table->integer('paginas')->nullable;
            $table->string('medidas')->nullable;
            $table->integer('peso')->nullable;
            $table->string('agotado')->nullable;
            $table->string('activo')->nullable;
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
        Schema::dropIfExists('books');
    }
}
