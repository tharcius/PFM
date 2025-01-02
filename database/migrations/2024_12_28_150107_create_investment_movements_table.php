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
            $table->tinyInteger('type'); // 1 - 'aporte' ou 2 - 'saque'
            $table->integer('amount'); // Valor do movimento
            $table->dateTime('date'); // Data do movimento
            $table->string('description', 255)->nullable(); // Descrição do movimento
            $table->foreignId('investment_id')->constrained('investments'); // Relacionamento com a tabela 'investments'
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