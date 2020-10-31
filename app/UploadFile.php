<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UploadFile extends Model
{
    protected $table = "upload_file_morph";

    protected $fillable = [
        'name',
        'alternativeText',
        'caption',
        'width',
        'height',
        'formats',
        'hash',
        'ext',
        'mime',
        'size',
        'url',
        'previewUrl',
        'provider',
        'provider_metadata',
        'updated_by'
    ];

    public function uploadFileMorph()
    {
        return $this->hasMany('App\UploadFileMorph','upload_file_id');
    }
}
