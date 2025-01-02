<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Account extends Model
{
    /** @use HasFactory<\Database\Factories\AccountFactory> */
    use HasFactory;

    protected $fillable = [
        'account_type',
        'bank_name',
        'account_number',
        'account_agency'
    ];

    public function paymentMethods(): HasMany
    {
        return $this->hasMany(PaymentMethods::class);
    }
}
