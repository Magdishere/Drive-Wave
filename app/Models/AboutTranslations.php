<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutTranslations extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'paragraph', 'info', 'image_path', 'icon_image'
    ];
    public $timestamps = false;
}
