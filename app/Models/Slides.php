<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slides extends Model
{
    use HasFactory;
    use Translatable;

    protected $fillable = [
        'title', 'sub_title', 'image_path'
    ];

     // 3. To define which attributes needs to be translated
    public $translatedAttributes = ['title', 'sub_title'];

}
