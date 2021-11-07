<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'country',
        'city',
        'postcode',
        'streetName',
        'buildingNumber',
        'latitude',
        'longitude',
        'created_at',
        'updated_at',
    ];
}
