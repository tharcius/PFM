<?php

namespace App\Enums;

enum InvestmentMovementType: int
{
    case APORTE = 1;
    case SAQUE = 2;

    public function label(): string
    {
        return match ($this) {
            self::APORTE => 'Aporte',
            self::SAQUE => 'Saque',
        };
    }
}
