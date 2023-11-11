<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'type', 'symbol', 'volume', 's_l', 't_p', 'buy_or_sell', 'status', 'amount', 'point1', 'point2', 'asset_type', 'profit1', 'profit2', 'created_at', 'updated_at', 'duration'
    ];
}
