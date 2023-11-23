<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocationsTranslation extends Model
{
    use HasFactory;

    protected $fillable = ['country', 'state', 'city', 'street_address', 'phone_number'];
    public $timestamps = false;
}
