<?php

namespace App\Models;

use App\Models\TransactionType;
use Spatie\MediaLibrary\HasMedia;
use Database\Factories\PropertyFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Property extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

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
        'type',
        'transaction_type',
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

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function amenities()
    {
        return $this->belongsToMany(Amenity::class);
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('grid')
            ->width(600)
            ->height(1000)
            ->sharpen(10);
    }
}
