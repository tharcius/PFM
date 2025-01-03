<?php

namespace App\Enums;

enum AccountType: int
{
    case DINHEIRO = 1;
    case CONTA_BANCARIA = 2;
    case APOSENTADORIA_PRIVADA = 3;

    public function label(): string
    {
        return match ($this) {
            self::DINHEIRO => 'Dinheiro',
            self::CONTA_BANCARIA => 'Conta Bancária',
            self::APOSENTADORIA_PRIVADA => 'Aposentadoria Privada',
        };
    }
}
