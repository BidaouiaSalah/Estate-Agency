<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionType extends Model
{
    use HasFactory;

    public static $SELL = 'sell';
    public static $RENT = 'rent';
    public static $BUY = 'buy';
}
