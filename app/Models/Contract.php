<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;

    public function estates()
    {
        return $this->hasOne(Estate::class);
    }
    
    public function agent()
    {
        return $this->belongsTo(User::role('agent'));
    }
}
