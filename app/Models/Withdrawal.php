<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdrawal extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'wallet_amount', 'wallet_address', 'wallet_type', 'status', 'wireT_amount', 'wireT_acct_name', 'wireT_acct_num', 'wireT_IBAN', 'wireT_bank_name', 'wireT_country', 'wireT_swift_code',
    ];
}
