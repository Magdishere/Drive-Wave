<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarTranslations extends Model
{
    use HasFactory;

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

    public $timestamps = false;

}
