<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = ['title', 'categories', 'author', 'publisher', 'year', 'details', 'stock', 'price'];
}
