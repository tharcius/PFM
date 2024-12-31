<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Installment extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'installment_number',
        'installment_amoaunt',
        'payment_date'
    ];
}
