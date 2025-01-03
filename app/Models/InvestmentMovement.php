<?php

namespace App\Models;

use App\Enums\InvestmentMovementType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class InvestmentMovement extends Model
{
    /** @use HasFactory<\Database\Factories\InvestmentMovementFactory> */
    use HasFactory;

    protected $casts = [
        'type' => InvestmentMovementType::class
    ];

    protected $fillable = [
        'type',
        'amount',
        'date',
        'description',
        'investment_id'
    ];

    public function getInvestmentMovementTypeLabelAttribute(): string
    {
        return $this->type->label();
    }

    public function investstment(): HasOne
    {
        return $this->hasOne(Investment::class);
    }

}
