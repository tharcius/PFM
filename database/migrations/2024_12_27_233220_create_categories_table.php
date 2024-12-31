<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id(); // Cria uma coluna de chave primária auto-incremento chamada 'id'
            $table->string('name', 50); // Coluna para o nome da categoria
            $table->string('description', 255)->nullable(); // Coluna para a descrição da categoria, pode ser nula
            $table->softDeletes();
            $table->timestamps(); // Cria as colunas 'created_at' e 'updated_at'
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
