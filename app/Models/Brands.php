<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;

class Brands extends Model
{
    use HasFactory;
    use Translatable;

    protected $fillable = [
        'name', 'country'
    ];

     // 3. To define which attributes needs to be translated
    public $translatedAttributes = ['name', 'country'];
}
