<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyType extends Model
{
    use HasFactory;

    public static $HOUSE = 'house';
    public static $APPARTMENT = 'appartment';
    public static $VILLA = 'villa';
}
