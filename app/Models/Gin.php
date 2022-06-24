<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Gin extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'gins';

    protected $fillable = [
        'name', 'distillery_id', 'notes', 'shelf', 'rating', 'status'
    ];

    public function distillery(){
        return $this->belongsTo(Distillery::class);
    }
}
