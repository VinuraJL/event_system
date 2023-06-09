<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Event extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillables=[

        'category_id',
        'name',
        'description',
        'address',
        'city',
        'country',
        'zip_code',
        'latitude',
        'longitude',

        'phone',
        'email',
        'website',

        'price',



    ]







}
