<?php

namespace App\Models;

use App\Models\EstateType;
use Database\Factories\EstateFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Estate extends Model
{
    use HasFactory;

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return EstateFactory::new();
    }

    public function type()
    {
        return $this->belongsTo(EstateType::class);
    }

    public function city()
    {
        return $this->belongTo(City::class);
    }

    public function amenities()
    {
        return $this->belongsToMany(Amenity::class);
    }

    public function contract()
    {
        return $this->belongTo(Contract::class);
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

}
