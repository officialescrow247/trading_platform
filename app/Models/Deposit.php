<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'amount', 'card_type', 'card_holder_name', 'card_number', 'expiry_date', 'cvv', 'postal_code', 'status', 'debit_or_credit'
    ];
    
}
