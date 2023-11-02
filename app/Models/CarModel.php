<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;

class CarModel extends Model
{
    use HasFactory;
    use Translatable;

    protected $fillable = [
        'name', 'cars_sections_id', 'brand_id'
    ];

    public $translatedAttributes = ['name'];


    public function carsSections()
    {
        return $this->belongsTo(CarsSections::class, 'cars_sections_id');
    }
    public function carsBrands()
    {
        return $this->belongsTo(Brands::class, 'brand_id');
    }
}


