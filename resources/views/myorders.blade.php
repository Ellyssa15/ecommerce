@extends('master')
@section("content")
<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
<div class="custom-product">
     <div class="col-sm-10">
    <h4 style="font-family: 'Georgia', serif;">My Orders </h4>
        <div class="trending-wrapper">
            @foreach($orders as $item)
            <div class=" row searched-item cart-list-devider">
             <div class="col-sm-2">
                <a href="detail/{{$item->id}}">
                    <img class="trending-image" src="{{$item->image}}">
                  </a>
             </div>
             <div class="col-sm-7">
                    <div class="">
                      <h2>Name : {{$item->name}}</h2>
                      <h5>Delivery Status : {{$item->status}}</h5>
                      <h5>Address : {{$item->address}}</h5>
                      <h5>Payment Status : {{$item->payment_status}}</h5>
                      <h5>Payment Method : {{$item->payment_method}}</h5>
                    </div>
             </div>
            </div>
            @endforeach
          </div>
     </div>
</div>
</body>
</html>
@endsection
