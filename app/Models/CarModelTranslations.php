<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarModelTranslations extends Model
{
    use HasFactory;
    // use Translatable;


    protected $fillable = [
        'name', 'brand_id', 'cars_sections_id'
    ];

    public $translatedAttributes = ['name'];
    public $timestamps = false;
}
