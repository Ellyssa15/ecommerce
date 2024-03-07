<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Checkout\Session;
use Stripe\Stripe;



class StripeController extends Controller
{

    public function session(Request $request)
    {

        $productItems = [];

        Stripe::setApiKey(config('stripe.sk'));

        foreach (session('cart') as $id => $details) {
<<<<<<< HEAD
            $name = $details['name'];
=======
            $product_name = $details['product_name'];
>>>>>>> 04d1b5c67fe9383007ab6c55dcc03d2474b01969
            $total = $details['price'];
            $quantity = $details['quantity'];

            $two0 = "00";
            $unit_amount = "$total$two0";

            $productItems[] = [
                'price_data' => [
                    'product_data' => [
<<<<<<< HEAD
                        'name' => $name,
=======
                        'name' => $product_name,
>>>>>>> 04d1b5c67fe9383007ab6c55dcc03d2474b01969
                    ],
                    'currency' => 'MYR',
                    'unit_amount' => $unit_amount,
                ],
                'quantity' => $quantity
            ];
        }


        $checkoutSession = Session::create([
            'line_items' => [$productItems],
            'mode' => 'payment',
            'allow_promotion_codes' => true,
            'metadata' => [
                'user_id' => "0001"
            ],
            'success_url' => route('index'),
            'cancel_url' => route('index'),
        ]);

        return redirect()->away($checkoutSession->url);
    }

}
