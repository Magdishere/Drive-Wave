<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarsSectionsTranslation extends Model
{
    use HasFactory;

    protected $fillable = ['type', 'description'];
    public $timestamps = false;
}
