<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Distillery extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'distilleries';

    protected $fillable = [
        'name', 'country_id'
    ];

    public function country(){
        return $this->belongsTo(Country::class);
    }
}
