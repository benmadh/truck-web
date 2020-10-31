<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UploadFileMorph extends Model
{
    protected $table = "upload_file_morph";

    protected $fillable = [
        'upload_file_id',
        'related_id',
        'related_type',
        'field',
        'order'
    ];

    public function vehicle()
    {
        return $this->belongsTo('App\Vehicle','related_id');
    }

    public function commentable()
    {
        return $this->morphTo();
    }
}
