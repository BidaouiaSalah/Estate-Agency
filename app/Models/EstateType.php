<?php

namespace App\Models;

use App\Models\Estate;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\EstateTypeFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EstateType extends Model
{
    use HasFactory;

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return EstateTypeFactory::new();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'slug'
    ];

    public function estates()
    {
        return $this->hasMany(Estate::class);
    }
}
