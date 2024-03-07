<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static findOrFail($id)
 */
class Products extends Model
{

    protected $fillable = ['name', 'price', 'description', 'image'];
}
