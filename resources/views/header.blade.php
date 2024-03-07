    <?php
    use App\Http\Controllers\ProductController;
    // $total=0;
    // if(Session::has('user'))
    // {
    // $total= ProductController::cart();
    // }

    ?>
    <nav class="navbar navbar-expand-lg bg-body-tertiary ">
        <link href='https://unpkg.com/css.gg@2.0.0/icons/css/shopping-cart.css' rel='stylesheet'>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
            <li class="dropdown" style="padding-right: 20px;">
                <a data-toggle="dropdown" href="#"><i class="gg-profile" style="margin-right: 0.5rem;"></i>{{strtoupper(Session::get('user')['name'])}}
                <span class="caret" style="margin-left: 0.5rem;"></span></a>
                <ul class="dropdown-menu">
                <li><a href="/logout" style="font-size: 10px">LOGOUT</a></li>
                </ul>
            </li>
            @else
            <li><a href="/login">LOGIN</a></li>
                @endif
            </ul>

            <ul class="navbar-nav ms-auto">
                <li><a href="/cart">
                    <button style="margin-right: 1rem; font-size: 15px" class="btn btn-outline-dark d-flex align-items-center" type="submit">
                    <i class="gg-shopping-cart"></i>Cart
                    <span class="badge bg-dark text-white ms-1 ">{{ count((array) session('cart'))}}</span>
                </button></a></li>
            </ul>
        </div>
        </div>
    </nav>
    <nav>

    </nav>
