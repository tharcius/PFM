<?php

namespace App\Enums;

enum TransactionType: int
{
    case SAIDA = 1;
    case ENTRADA = 2;
    case INVESTIMENTO = 3;

    public function label(): string
    {
        return match ($this) {
            self::SAIDA => 'Despesa',
            self::ENTRADA => 'Receita',
            self::INVESTIMENTO => 'Investimento',
        };
    }
}
