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

    public function dealUrl($model, $brand ) {
        
        // replace non letter or digits by -
         $text = preg_replace('~[^\\pL\d]+~u', '-',$model.'-'.$brand);
        
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
}
