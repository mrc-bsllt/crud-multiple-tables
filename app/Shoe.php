<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shoe extends Model
{
    protected $fillable = [
      "image",
      "brand",
      "model",
      "color",
      "size",
      "style",
      "price",
    ];
}
