<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehicleModel extends Model
{
    protected $table = "modals";
    
    protected $fillable = [
        'name',
    ];

    public function modelBelongsToBrand()
    {
        return $this->belongsTo('App\Brand','brand');
    }

}
