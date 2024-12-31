<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investments', function (Blueprint $table) {
            $table->id(); // Cria uma coluna de chave primária auto-incremento chamada 'id'
            $table->string('investment_type', 50); // Coluna para o tipo de investimento
            $table->integer('initial_value'); // Coluna para o valor inicial do investimento
            $table->integer('yield'); // Coluna para o rendimento do investimento
            $table->dateTime('start_date'); // Coluna para a data de início do investimento
            $table->dateTime('end_date')->nullable(); // Coluna para a data de fim do investimento, pode ser nula
            $table->foreignId('transaction_id')->constrained('transactions'); // Relacionamento com a tabela 'transactions'
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
        Schema::dropIfExists('investments');
    }
}
