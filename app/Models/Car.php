<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;

class Car extends Model
{
    use HasFactory;
    use Translatable;
    protected $fillable = [

        'brand',
        'cars_section',
        'year',
        'license_plate',
        'price_per_day',
        'mileage',
        'transmission',
        'seating_capacity',
        'engine_capacity',
        'availability',
        'name',
        'color',
        'fuel_type',
        'description',
    ];


    public $translatedAttributes = ['name', 'color', 'fuel_type', 'description'];


    public function carSections()
    {
        return $this->belongsTo(CarsSections::class, 'cars_section');
    }
    public function carBrands()
    {
        return $this->belongsTo(Brands::class, 'brand');
    }

    public function images()
    {
    return $this->hasMany(CarImage::class);
    }
}

