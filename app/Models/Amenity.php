<?php

namespace App\Models;

use Database\Factories\AmenityFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Amenity extends Model
{
    use HasFactory;

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return AmenityFactory::new();
    }

    public function estates()
    {
        $this->belongsToMany(Estate::class);
    }
}
