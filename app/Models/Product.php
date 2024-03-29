<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'image', 'price', 'description'];

    use HasFactory;

    protected $fillable = ['product_name', 'photo', 'price', 'product_description'];
}
