<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Feed\Feedable;
use Spatie\Feed\FeedItem;

class Vehicle extends Model implements Feedable
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

    

    public function toFeedItem()
    {
        return FeedItem::create()
            ->id($this->number)
            ->title($this->brandId->name . $this->modelId->name . $this->number)
            ->summary(isset($this->description).$this->keywords().$this->dealUrl($this->type,$this->modelId->name,$this->brandId->name))
            ->updated($this->updated_at)
            ->link(\config('app.url').'/veicoli/'.$this->dealUrl($this->brandId->name , $this->modelId->name , $this->number).'/'.$this->id)
            ->author("AUTO CEYLON S.R.L");
    }

    public function keywords()
    {
        $specs = json_decode($this->specs);
        $specs_array = (array) $specs;
        $meta_keyword = implode(":",$specs_array);
        
        return $meta_keyword;

    }

    public function dealUrl($type ,$model, $brand ) {
        
        // replace non letter or digits by -
         $text = preg_replace('~[^\\pL\d]+~u', '-',$type.'-'.$model.'-'.$brand);
        
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

    // rss feed

    public static function getFeedItems()
    {
      return static::all();
    }

    public function getLinkAttribute()
    {
        return route('vehicle.show', $this);
    }

}
