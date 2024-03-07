<nav class="navbar navbar-expand-lg bg-body-tertiary ">

    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/shopping-cart.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <div class="container-fluid">
        <img src="{{ Storage::url('logo.png') }}" style="width: 100px; height: 70px; padding-left: 30px;">

        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="font-size: 15px">
            <ul class="navbar-nav d-flex align-items-center me-auto mb-2 mb-lg-0">
                <li class="nav-item" style="padding-right: 30px;">
                    <a class="nav-link active" aria-current="page" href="/">HOME</a>
                </li>
                <li class="nav-item" style="padding-right: 20px;">
                    <a class="nav-link" href="/myorders">ORDERS</a>
                </li>

                @if(Session::has('user'))
                <div class="dropdown" style="padding-right: 20px;">
                    <a data-toggle="dropdown" href="/" class="nav-link">
                        <i class="gg-profile" style="margin-right: 0.5rem;">
                        </i>
                        {{ strtoupper(Session::get('user')['name']) }}
                        <span class="caret" style="margin-left: 0.5rem;"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="/logout" style="font-size: 10px">LOGOUT</a>
                        </li>
                    </ul>
                </div>
                @else
                <li><a href="/login">LOGIN</a></li>
                @endif
            </ul>
            <button id="dLabel" type="button" class="btn btn-primary" data-bs-toggle="dropdown">
                <i class="fa fa-shopping-cart" aria-hidden="true">
                </i>
                Cart
                <span class="badge bg-danger">
                        {{ count((array) session('cart')) }}
                    </span>
            </button>

            <div class="dropdown-menu" aria-labelledby="dLabel">
                <div class="row total-header-section">
                    @php $total = 0
                    @endphp
                    @foreach((array) session('cart') as $id => $details)
                    @php $total += $details['price'] * $details['quantity']
                    @endphp
                    @endforeach
                    <div class="col-lg-12 col-sm-12 col-12 total-section text-right">
                        <p>Total:
                            <span class="text-success">
                                    $ {{ $total }}
                                </span>
                        </p>
                    </div>
                </div>


                @if(session('cart'))
                @foreach(session('cart') as $id => $details)
                <div class="row flex-fill w-100">
                    <div class="col-lg-5 col-sm-4 col-4 w-full">
                        <img src="{{$details['photo']}}" width="100" height="100"/>
                    </div>
                        <p>{{ $details['product_name'] }}</p>
                        <span class="price text-success">
                            ${{ $details['price'] }}
                        </span>
                        <span class="count">
                            Quantity:{{ $details['quantity'] }}
                        </span>
                </div>
                @endforeach
                @endif


                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                        <a href="{{ route('cart') }}" class="btn btn-primary btn-block">View all</a>
                    </div>
                </div>
            </div>
            </ul>

        </div>
    </div>
</nav>
<nav>

</nav>
