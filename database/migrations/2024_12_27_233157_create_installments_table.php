<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstallmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('installments', function (Blueprint $table) {
            $table->id(); // Cria uma coluna de chave primária auto-incremento chamada 'id'
            $table->foreignId('transaction_id')->constrained('transactions')->onDelete('cascade'); // Relacionamento com a tabela 'transactions'
            $table->integer('installment_number'); // Coluna para o número da parcela
            $table->integer('installment_amount'); // Coluna para o valor da parcela
            $table->dateTime('payment_date'); // Coluna para a data de pagamento da parcela
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
        Schema::dropIfExists('installments');
    }
}
