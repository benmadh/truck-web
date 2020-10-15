<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = [
        'number',
        'images',
        'specs',
        'description',
        'model_id',
        'brand_id',
        'type'
    ];

    public function brand()
    {
        return $this->belongsTo('App\Brand');
    }

    public function model()
    {
        return $this->belongsTo('App\VehicleModel');
    }
}
