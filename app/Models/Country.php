<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Country extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'country';

    protected $fillable = [
        'name'
    ];
}
