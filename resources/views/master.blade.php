<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-comm Project</title>
    <link rel="icon" type="image/x-icon" href="{{ Storage::url('shop-cart.png') }}">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}

</body>
<style>
    body, h1, h2, h3,h5, h6, p {
    font-family: 'Georgia', serif;
    font-size: 15px;
    }
    .custom-login{
        height: 500px;
        padding-top: 100px;
    }
    .custom-product{
        height: 600px
    }
    .trending-image{
        height: 100px;
    }
    .trening-item{
        float: left;
        width: 20%;
    }
    .trending-wrapper{
        margin: 50px;
    }
    .trending-products {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        grid-gap: 50px;
    }
    .trending-product {
        background-color: #f8f9fa;
        padding: 10px;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
    }
    .product-image img {
        width: 100%;
        height: auto;
    }
    .product-info {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 5px;
    color: black;
}
    .product-info h4 {
        margin: 0;
        color: black;
    }
    .detail-img{
        height: 200px;
    }
    .cart-list-devider{
        border-bottom: 1px solid #ccc;
        margin-bottom: 20px;
        padding-bottom: 20px
    }
    .mySlides {
        display: none;
        height: 500px;
    }
    .w3-left, .w3-right, .w3-badge {cursor:pointer}
    .w3-badge {height:13px;width:13px;padding:0}
</style>
</html>
