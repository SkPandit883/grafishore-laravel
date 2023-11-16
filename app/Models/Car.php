<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'price',
        'brand_id',
        'description',
        'image',
    ];

    public function brand(){
        return $this->belongsTo(Brand::class,'brand_id');
    }

    public function fuel(){
        return $this->hasOne(CarFuel::class,'car_id') ;
    }
}
