<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upcoming extends Model
{
    protected $fillable = [
        'number',
        'brand',
        'model',
        'published_at',
        'created_by',
        'updated_by'
    ];
}
