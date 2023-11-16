<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarFuel extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'car_id',
        'range',
        'refill',
        'tour',
        'eco',
        'sport',
    ];

    public function car(){
        return $this->belongsTo(Car::class, 'car_id');
    }
}
