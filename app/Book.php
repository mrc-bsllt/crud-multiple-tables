<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
      "image",
      "title",
      "author",
      "year_pubblication",
      "lang",
    ];
}
