<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    public function estates()
    {
        return $this->belongsTo(Estate::class);
    }

    public function agents()
    {
        // return $this->belongTo(User::role('agent'));
    }
}
