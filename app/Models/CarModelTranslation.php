<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarModelTranslation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'cars_sections_id' , 'brand_id',
    ];

    public $timestamps = false;
}
