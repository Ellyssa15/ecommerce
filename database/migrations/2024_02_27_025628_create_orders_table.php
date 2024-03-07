<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('session_id');
            $table->string('product_id');
//            $table->string('user_id');
            $table->string('status');
            $table->decimal('total_price', 6, 2);
<<<<<<< HEAD
            $table->string('session_id');
=======
>>>>>>> 04d1b5c67fe9383007ab6c55dcc03d2474b01969
            $table->string('payment_method');
            $table->string('payment_status');
            $table->string('address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
