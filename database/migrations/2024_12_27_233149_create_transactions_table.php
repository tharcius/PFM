<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id(); // Cria uma coluna de chave primária auto-incremento chamada 'id'
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Relacionamento com a tabela 'users'
            $table->integer('amount'); // Coluna para o valor da transação
            $table->dateTime('date'); // Coluna para a data da transação
            $table->integer('type'); // Coluna para o tipo de transação (Entrada ou Saída)
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade'); // Relacionamento com a tabela 'categories'
            $table->string('description', 255)->nullable(); // Coluna para descrição da transação
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
        Schema::dropIfExists('transactions');
    }
}
