<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
<<<<<<< HEAD
    use HasFactory;
    public $table="cart";

=======
    protected $table = 'cart'; // Assuming your table name is 'cart'

    // Define the relationship with the Product model
>>>>>>> 04d1b5c67fe9383007ab6c55dcc03d2474b01969
    public function product(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
<<<<<<< HEAD
=======

>>>>>>> 04d1b5c67fe9383007ab6c55dcc03d2474b01969
}
