<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['status', 'total_price', 'session_id', 'product_id', 'quantity'];

<<<<<<< HEAD
    use HasFactory;
    public $timestamps= false;

=======
>>>>>>> 04d1b5c67fe9383007ab6c55dcc03d2474b01969
    public function products(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }
}
