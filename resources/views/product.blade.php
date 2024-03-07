@extends('master')
@section('content')

<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
    {{View::make('carousel')}}
        <div class="trending-wrapper">
            <h3>All Products</h3>
            <div class="trending-products">
                @foreach($products as $item)
                <div class="trending-product">
                    <a href="detail/{{$item['id']}}">
                        <div class="product-image">
                            <img src="{{$item['image']}}" alt="{{$item['name']}}">
                        </div>
                        <div class="product-info">
                            <h4>{{$item['name']}}</h4>
                            <br>
                            <h6>RM {{$item['price']}}</h6>
                            <br>
                            <p class="btn-holder">
                                <a href="{{ route('add_to_cart', $item->id) }}"
                                   class="btn btn-primary btn-block text-center" role="button">
                                    Add to cart
                                </a>
                            </p>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </body>
    </html>
@endsection
