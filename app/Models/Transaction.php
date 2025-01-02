<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Transaction extends Model
{
    /** @use HasFactory<\Database\Factories\TransactionFactory> */
    use HasFactory;
    
    protected $fillable = [
        'amount',
        'date',
        'type',
        'description',
        'payment_method_id',
        'user_id',
        'category_id'
    ];

    public function categories(): HasMany
    {
        return $this->hasMany(Category::class);
    }

    public function investment(): HasOne
    {
        return $this->hasOne(Investment::class);
    }

    public function installment(): HasOne
    {
        return $this->hasOne(Installment::class);
    }

    public function paymentMethod(): HasOne
    {
        return $this->hasOne(PaymentMethod::class);
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'tag_transactions', 'transaction_id', 'tag_id');
    }

    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }
}
