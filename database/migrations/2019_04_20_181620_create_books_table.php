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
            $table->string('cod_articulo')->nullable();            
            $table->string('isbn10')->nullable();
            $table->string('isbn13')->nullable();
            $table->string('ean')->nullable();
            $table->text('titulo')->nullable();
            $table->text('subtitulo')->nullable();
            $table->text('apellido_autor')->nullable();
            $table->text('nombre_autor')->nullable();
            $table->text('biografia_autor')->nullable();
            $table->text('ilustrador')->nullable();
            $table->text('traductor')->nullable();
            $table->text('editorial')->nullable();
            $table->text('coleccion')->nullable();
            $table->text('categoria')->nullable();
            $table->string('tipo')->nullable();
            $table->string('genero')->nullable();
            $table->text('sinopsis')->nullable();
            $table->text('contratapa')->nullable();
            $table->text('metadata')->nullable();
            $table->text('portada')->nullable();
            $table->text('booktrailer')->nullable();
            $table->string('digital')->nullable();
            $table->string('idioma')->nullable();
            $table->string('formato')->nullable();
            $table->string('fecha_publicacion')->nullable();
            $table->string('edicion')->nullable();
            $table->string('pvp')->nullable();
            $table->string('moneda')->nullable();
            $table->string('paginas')->nullable();
            $table->string('medidas')->nullable();
            $table->string('peso')->nullable();
            $table->string('agotado')->nullable();
            $table->string('activo')->nullable();
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
