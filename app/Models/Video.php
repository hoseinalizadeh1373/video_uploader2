<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Video extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    protected $fillable= ['title','desc'];

    public function registerMediaCollections(): void
    {

     $this->addMediaCollection('video')->singleFile();   

     $this->addMediaCollection('cover')->singleFile();
     
    }
    public function getUrlAttribute(){
        return $this->getFirstMediaUrl("video");
    }
}
