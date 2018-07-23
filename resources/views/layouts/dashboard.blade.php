<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PastryShop</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/site/remainingPages.css') }}" rel="stylesheet">
    <link href="{{ asset('css/site/table.css') }}" rel="stylesheet">
    <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <style>
        .gap {
            margin-top: 25px;
        }

        .container{
            background-color: #fff;
        }
    </style>
</head>
@section('head') @show @section('style') @show

<body>

    <div class="topImage">
        @include('includes.navBarDark')
    </div>
    <div class="container">
        @include('includes.error')
        @include('includes.message')
        <div class="title text-center bg-danger text-light">
            <h2>
                @yield('pageTitle')
            </h2>
        </div>
        <div class="row">
            <div class="table-responsive col-md-2">
                <div class="card">
                    <div class="card-header">
                        {{ Auth::user()->name }}
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="{{ route('home') }}">Account Details</a> </li>
                        <li class="list-group-item"><a href="{{ route('orders') }}">Orders</a> </li>
                        @if(Auth::user()->userType == '1')
                        <li class="list-group-item"><a href="{{ route('cart.view') }}">Cart</a> </li>
                        @endif
                        <li class="list-group-item"><a href="{{ route('logout') }}">Logout</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-7 offset-md-1">

                @section('body') @show
            </div>


            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
            <script src="{{ asset('js/bootstrap.min.js') }}"></script>
            <script src="{{ asset('js/confirm.js') }}"></script>
            @section('script') @show

</body>

</html>
