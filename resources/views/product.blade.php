@extends('master')
@section('content')

<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
    <div class="container carousel-inner">
      <div class="w3-content w3-display-container" style="max-width:800px">
        <img class="mySlides" src="{{ Storage::url('ads1.jpg') }}" style="width:100%">
        <img class="mySlides" src="{{ Storage::url('ads2.jpg') }}" style="width:100%">
        <img class="mySlides" src="{{ Storage::url('ads3.jpg') }}" style="width:100%">
        <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
          <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
          <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
          <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
          <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
          <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
        </div>
      </div>
    </div>
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
                            <form action="/add_to_cart" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value={{$item['id']}}>
                            <button class="btn btn-primary">Add to Cart</button>
                            </form>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </body>
    </html>
@endsection
