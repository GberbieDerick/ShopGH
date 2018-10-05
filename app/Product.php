<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','description','details','price','image_id'];


    public function images(){
       return $this->hasMany('App\Image');
      //return $this->hasMany(Image::class);
    }
}
