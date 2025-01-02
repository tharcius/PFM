<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Installment extends Model
{
    /** @use HasFactory<\Database\Factories\InstallmentFactory> */
    use HasFactory;
    
    protected $fillable = [
        'installment_number',
        'installment_amoaunt',
        'payment_date'
    ];

    public function transaction(): HasOne
    {
        return $this->hasOne(Transaction::class);
    }
}
