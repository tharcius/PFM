<?php

namespace App\Models;

use App\Enums\PaymentMethodType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PaymentMethod extends Model
{
    /** @use HasFactory<\Database\Factories\PaymentMethodsFactory> */
    use HasFactory;

    protected $casts = [
        'type' => PaymentMethodType::class
    ];

    protected $fillable = [
        'type',
        'account_id'
    ];

    public function getPaymentMethodTypeLabelAttribute(): string
    {
        return $this->type->label();
    }

    public function accounts(): HasMany
    {
        return $this->hasMany(Account::class);
    }

    public function transactions(): HasMany
    {
        return $this->hasMany(Transaction::class);
    }
}
