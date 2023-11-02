<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;


class CarsSections extends Model
{
    use HasFactory;
    use Translatable; // 2. To add translation methods

    protected $fillable = [
        'num_of_cars', 'type', 'description'
    ];

     // 3. To define which attributes needs to be translated
    public $translatedAttributes = ['type', 'description'];


}
