<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shoe extends Model
{
    protected $fillable = [
      "brand",
      "model",
      "color",
      "size",
      "style",
      "price",
    ];
}
