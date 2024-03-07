@extends('master')
@section("content")
<div class="container">
   <div class="row">
       <div class="col-sm-6">
       <img class="detail-img" src="{{$product['image']}}" alt="">
       </div>
       <div class="col-sm-6">
       <h2>{{$product['name']}}</h2>
       <h3>Price : RM {{$product['price']}}</h3>
       <h4>Details: {{$product['description']}}</h4>
       <br><br>
           <form action="{{ route('cart.add') }}" method="post">
               @csrf
               <input type="hidden" name="id" value="{{ $product->id }}">
               <input type="number" name="quantity" value="1" min="1">
               <button type="submit">Add to Cart</button>
           </form>
       <br>
       <button class="btn btn-success">Buy Now</button>
       <br><br>
       <a href="/">Go Back</a>
    </div>
   </div>
</div>
@endsection
