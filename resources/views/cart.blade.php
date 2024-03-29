<<<<<<< HEAD
@extends('master')
=======
@extends('layout')
>>>>>>> 04d1b5c67fe9383007ab6c55dcc03d2474b01969

@section('content')
<table id="cart" class="table table-hover table-condensed">
    <thead>
    <tr>
        <th style="width:50%">Product</th>
        <th style="width:10%">Price</th>
        <th style="width:8%">Quantity</th>
        <th style="width:22%" class="text-center">Subtotal</th>
        <th style="width:10%"></th>
    </tr>
    </thead>
    <tbody>
    @php $total = 0
    @endphp
    @if(session('cart'))
<<<<<<< HEAD
    @foreach(session('cart') as $id => $details)
    @php $total += $details['price'] * $details['quantity']
=======
    @foreach(session('cart') as $id => $product)
    @php $total += product['price'] * $product['quantity']
>>>>>>> 04d1b5c67fe9383007ab6c55dcc03d2474b01969
    @endphp
    <tr data-id="{{ $id }}">
        <td data-th="Product">
            <div class="row">
                <div class="col-sm-3 hidden-xs">
<<<<<<< HEAD
                    <img src="{{$details['image']}}" alt="{{$details['name']}}"
=======
                    <img src="{{$products['photo']}}" alt="{{$products['product_name']}}"
>>>>>>> 04d1b5c67fe9383007ab6c55dcc03d2474b01969
                         width="100"
                         height="100" class="img-responsive"/>
                </div>
                <div class="col-sm-9">
<<<<<<< HEAD
                    <h4 class="nomargin">{{ $details['name'] }}</h4>
                </div>
            </div>
        </td>
        <td data-th="Price">${{ $details['price'] }}</td>
        <td data-th="Quantity">
            <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity cart_update" min="1"/>
        </td>
        <td data-th="Subtotal" class="text-center">${{ $details['price'] * $details['quantity'] }}</td>
=======
                    <h4 class="nomargin">{{ $products['product_name'] }}</h4>
                </div>
            </div>
        </td>
        <td data-th="Price">${{ $products['price'] }}</td>
        <td data-th="Quantity">
            <input type="number" value="{{ $products['quantity'] }}" class="form-control quantity cart_update" min="1"/>
        </td>
        <td data-th="Subtotal" class="text-center">${{ $products['price'] * $products['quantity'] }}</td>
>>>>>>> 04d1b5c67fe9383007ab6c55dcc03d2474b01969
        <td class="actions" data-th="">
            <button class="btn btn-danger btn-sm cart_remove"><i class="fa fa-trash-o"></i> Delete</button>
        </td>
    </tr>
    @endforeach
    @endif
    </tbody>
    <tfoot>
    <tr>
        <td colspan="5" style="text-align:right;"><h3><strong>Total: RM{{ $total }}</strong></h3></td>
    </tr>
    <tr>
        <td colspan="5" style="text-align:right;">
            <form action="/session" method="POST">
                <a href="{{ url('/') }}" class="btn btn-danger"> <i class="fa fa-arrow-left"></i> Continue Shopping</a>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <button class="btn btn-success" type="submit" id="checkout-live-button"><i class="fa fa-money"></i>
                    Checkout
                </button>
            </form>
        </td>
    </tr>
    </tfoot>
</table>
@endsection

@section('scripts')
<script type="text/javascript">

    $(".cart_update").change(function (e) {
        e.preventDefault();

        var ele = $(this);

        $.ajax({
            url: '{{ route('update_cart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}',
                id: ele.parents("tr").attr("data-id"),
                quantity: ele.parents("tr").find(".quantity").val()
            },
            success: function (response) {
                window.location.reload();
            }
        });
    });

    $(".cart_remove").click(function (e) {
        e.preventDefault();

        let ele = $(this);

        if (confirm("Do you really want to remove?")) {
            $.ajax({
                url: '{{ route('remove_from_cart') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("tr").attr("data-id")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });

</script>
@endsection
