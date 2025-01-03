<?php

namespace App\Enums;

enum PaymentMethodType: int
{
    case PIX = 1;
    case VALE = 2;
    case BOLETO = 3;
    case DEBITO = 4;
    case CREDITO = 5;
    case DINHEIRO = 6;
    case TRANSFERENCIA = 7;

    public function label(): string
    {
        return match ($this) {
            self::DINHEIRO => 'Dinheiro',
            self::CREDITO => 'Cartão de Crédito',
            self::DEBITO => 'Cartão de Débito',
            self::TRANSFERENCIA => 'Transferência Bancária',
            self::BOLETO => 'Boleto',
            self::PIX => 'Pix',
            self::VALE => 'Vale Refeição'
        };
    }
}
