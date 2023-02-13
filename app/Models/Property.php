<?php

namespace App\Models;

use App\Models\TransactionType;
use Database\Factories\PropertyFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Property extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        
        'title',
 
        'description',
         
        'address',
         
        'postal_code',
         'city',
        'space',
        'type_id',
        'transaction_type_id',
        'price',
         
        'balconies',
         
        'bedrooms',
         
        'bathrooms',
         
        'garages',
         
        'parking_spaces',
         
        'pets_allowed',
         
        'available',
         
        'user_id'
    ];

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return PropertyFactory::new();
    }

    public function type()
    {
        return $this->belongsTo(PropertyType::class);
    }

    public function transactionType()
    {
        return $this->belongsTo(TransactionType::class);
    }

    public function amenities()
    {
        return $this->belongsToMany(Amenity::class);
    }
}
