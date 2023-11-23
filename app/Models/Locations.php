<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locations extends Model
{
    use HasFactory;
    use Translatable;

    protected $fillable = [
        'country', 'state', 'city', 'street_address', 'phone_number'
    ];

     // 3. To define which attributes needs to be translated
    public $translatedAttributes = ['country', 'state', 'city', 'street_address'];

}
