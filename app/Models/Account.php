<?php

namespace App\Models;

use App\Enums\AccountType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Account extends Model
{
    /** @use HasFactory<\Database\Factories\AccountFactory> */
    use HasFactory;

    protected $casts = [
        'type' => AccountType::class
    ];

    protected $fillable = [
        'name',
        'type',
        'bank_name',
        'number',
        'agency'
    ];

    public function getAccountTypeLabelAttribute(): string
    {
        return $this->type->label();
    }

    public function paymentMethods(): HasMany
    {
        return $this->hasMany(PaymentMethod::class);
    }
}
