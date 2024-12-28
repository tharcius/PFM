<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestmentMovementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investment_movements', function (Blueprint $table) {
            $table->id(); // Cria uma coluna de chave primária auto-incremento chamada 'id'
            $table->foreignId('investment_id')->constrained('investments')->onDelete('cascade'); // Relacionamento com a tabela 'investments'
            $table->string('movement_type', 10); // 'aporte' ou 'saque'
            $table->integer('amount'); // Valor do movimento
            $table->dateTime('date'); // Data do movimento
            $table->string('description', 255)->nullable(); // Descrição do movimento
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
        Schema::dropIfExists('investment_movements');
    }
}