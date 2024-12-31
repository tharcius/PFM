<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_tags', function (Blueprint $table) {
            $table->id(); // Cria uma coluna de chave primária auto-incremento chamada 'id'
            $table->foreignId('transaction_id')->constrained('transactions')->onDelete('cascade'); // Relacionamento com a tabela 'transactions'
            $table->foreignId('tag_id')->constrained('tags'); // Relacionamento com a tabela 'tags'
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
        Schema::dropIfExists('transaction_tags');
    }
}
