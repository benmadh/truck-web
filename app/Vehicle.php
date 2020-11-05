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
        'modal',
        'brand',
        'type',
        'slug'
    ];

    public function dealUrl($modalName) {
        
        // replace non letter or digits by -
         $text = preg_replace('~[^\\pL\d]+~u', '-', $modalName.'-'.isset($this->brandId) ? $this->brandId->name : "");
        
         // trim
         $text = trim($text, '-');
        
         // transliterate
         $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

         // lowercase
         $text = strtolower($text);

         // remove unwanted characters
         $text = preg_replace('~[^-\w]+~', '', $text);

         if (empty($text))
         {
           return 'n-a';
         }
         
         return $text;
         
   }    

    public function modelId()
    {
        return $this->belongsTo('App\VehicleModel', 'modal');
    }

    public function brandId()
    {
        return $this->belongsTo('App\Brand','brand');
    }

    public function uploadFileMorph()
    {
        return $this->hasMany('App\UploadFileMorph','related_id');
    }

}
