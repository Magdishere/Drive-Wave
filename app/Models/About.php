<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;

class About extends Model
{
    use HasFactory;
    use Translatable;

    protected $fillable = [
        'title', 'paragraph', 'info', 'image_path', 'icon_image'
    ];

     // 3. To define which attributes needs to be translated
    public $translatedAttributes = ['title', 'paragraph', 'info'];
}
