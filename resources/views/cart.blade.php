@extends('layouts.remainingPages') @section('head')
<link href="{{ asset('css/site/shopping-cart.css') }}" rel="stylesheet">
<link href="{{ asset('css/site/remainingPages.css') }}" rel="stylesheet">
<link href="{{ asset('css/site/table.css') }}" rel="stylesheet"> @endsection @section('style') @endsection @section('body')
<div class="topImage">
    @include('includes.navBarDark')
</div>

{{-- display on screen smaller than md --}}
<div class="container d-sm-none">
    @include('includes.error') @include('includes.message') @if(Cart::total()>0)
    <div class="title text-center bg-danger text-light">
        <h2>
            Your Cart
        </h2>
    </div>
    <form action="{{ route('cart.update') }}" method="post">
        {{ csrf_field() }} @foreach(Cart::content() as $row)
        <div class="row">
            <div class="card" style="width: 100%">
                @if( $row->id == 'b1')
                <img class="card-img-top" src="{{ asset('/storage/myAssets/bread1.png') }}" style="width:250px; height:400px"> 
                @elseif( $row->id == 'b2')
                <img class="card-img-top" src="{{ asset('/storage/myAssets/bread2.png') }}" style="width:250px; height:400px"> 
                @elseif( $row->id == 'b3')
                <img class="card-img-top" src="{{ asset('/storage/myAssets/bread3.png') }}" style="width:250px; height:400px"> 
                @elseif( $row->id == 'm1')
                <img class="card-img-top" src="{{ asset('/storage/myAssets/muffin1.png') }}" style="width:250px; height:400px">
                 @elseif( $row->id == 'm2')
                <img class="card-img-top" src="{{ asset('/storage/myAssets/muffin2.png') }}" style="width:250px; height:400px">
                 @elseif( $row->id == 'm3')
                <img class="card-img-top" src="{{ asset('/storage/myAssets/muffin3.png') }}" style="width:250px; height:400px">
                 @elseif( $row->id == 'm4')
                <img class="card-img-top" src="{{ asset('/storage/myAssets/muffin4.png') }}" style="width:250px; height:400px">
                 @elseif( $row->id == 'p1')
                <img class="card-img-top" src="{{ asset('/storage/myAssets/pastry1.jpg') }}" style="width:250px; height:400px">
                 @elseif( $row->id == 'p2')
                <img class="card-img-top" src="{{ asset('/storage/myAssets/pastry2.jpg') }}" style="width:250px; height:400px">
                 @elseif( $row->id == 'p3')
                <img class="card-img-top" src="{{ asset('/storage/myAssets/pastry3.jpg') }}" style="width:250px; height:400px">
                 @elseif( $row->id == 'p4')
                <img class="card-img-top" src="{{ asset('/storage/myAssets/pastry4.jpg') }}" style="width:250px; height:400px">
                 @elseif( $row->id == 'p5')
                <img class="card-img-top" src="{{ asset('/storage/myAssets/pastry5.jpg') }}" style="width:250px; height:400px">
                 @elseif( $row->id == 'p6')
                <img class="card-img-top" src="{{ asset('/storage/myAssets/pastry6.jpg') }}" style="width:250px; height:400px">
                 @endif
                <div class="card-body">
                    <div class="card-header bg-warning text-center">
                       <b> {{ $row->name }}</b>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><span class="float-left"> Price </span><span class="float-right">{{ $row->price }}</span></li>
                        <li class="list-group-item"><span class="float-left"> Sub-Total </span><span class="float-right">{{ $row->total }}</span></li>
                        <li class="list-group-item">
                            <span class="float-left"> Quantity </span><span class="float-right"><button type="button" class="qt-minus">-</button>
                            <input class="qt" id="quantity" type="number" name="qty[]" max="99" min="1" maxlength="2" value="{{ $row->qty }}">
                            <button type="button" class="qt-plus">+</button></span>
                            
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        @endforeach
        <!-- Button -->
        <div class="updateButton">
            <button type="submit" class="btn btn-md btn-info">
                Update Cart
            </button>
        </div>
    </form>
    @else
<div class="title text-center bg-danger text-light">
    <h2>
        Your cart is empty
    </h2>
</div>
@endif
</div>

{{-- display on screen larger than sm --}}
<div class="container d-none d-md-block">
    @include('includes.error') @include('includes.message') @if(Cart::total()>0)
    <div class="title text-center bg-danger text-light">
        <h2>
            Your Cart
        </h2>
    </div>
    <section id="cart">
        <form action="{{ route('cart.update') }}" method="post">
            {{ csrf_field() }} @foreach(Cart::content() as $row)
            <article class="product">
                <header>
                    <a class="remove" href="{{ route('cart.remove', ['productId'=> $row->rowId]) }}">
                        @if( $row->id == 'b1')
                        <img src="{{ asset('/storage/myAssets/bread1.png') }}"> 
                        @elseif( $row->id == 'b2')
                        <img src="{{ asset('/storage/myAssets/bread2.png') }}"> 
                        @elseif( $row->id == 'b3')
                        <img src="{{ asset('/storage/myAssets/bread3.png') }}"> 
                        @elseif( $row->id == 'm1')
                        <img src="{{ asset('/storage/myAssets/muffin1.png') }}"> 
                        @elseif( $row->id == 'm2')
                        <img src="{{ asset('/storage/myAssets/muffin2.png') }}"> 
                        @elseif( $row->id == 'm3')
                        <img src="{{ asset('/storage/myAssets/muffin3.png') }}"> 
                        @elseif( $row->id == 'm4')
                        <img src="{{ asset('/storage/myAssets/muffin4.png') }}"> 
                        @elseif( $row->id == 'p1')
                        <img src="{{ asset('/storage/myAssets/pastry1.jpg') }}"> 
                        @elseif( $row->id == 'p2')
                        <img src="{{ asset('/storage/myAssets/pastry2.jpg') }}"> 
                        @elseif( $row->id == 'p3')
                        <img src="{{ asset('/storage/myAssets/pastry3.jpg') }}"> 
                        @elseif( $row->id == 'p4')
                        <img src="{{ asset('/storage/myAssets/pastry4.jpg') }}"> 
                        @elseif( $row->id == 'p5')
                        <img src="{{ asset('/storage/myAssets/pastry5.jpg') }}"> 
                        @elseif( $row->id == 'p6')
                        <img src="{{ asset('/storage/myAssets/pastry6.jpg') }}"> @endif

                        <h3>Remove product</h3>
                    </a>
                </header>

                <div class="content">
                    <h1>{{ $row->name }}</h1>
                    <a class="btn btn-danger float-right" style="color: #fff">Remove</a>
                </div>

                <footer class="content">
                    <span class="qt-minus">-</span>
                    <input class="qt" id="quantity" type="number" name="qty[]" max="99" min="1" maxlength="2" value="{{ $row->qty }}">
                    <span class="qt-plus">+</span>

                    <h2 class="full-price">
                        {{ $row->total }} Rs
                    </h2>

                    <h2 class="price">
                        {{ $row->price }} rs
                    </h2>
                </footer>
            </article>
            @endforeach
            <!-- Button -->
            <div class="updateButton">
                <button type="submit" class="btn btn-md btn-info">
                    Update Cart
                </button>
            </div>
        </form>
    </section>
</div>
<footer id="site-footer">
    <div class="container clearfix">
        <div class="right">
            <div class="bg-danger">
                <h1 class="total">Total:
                    <span>{{ Cart::total() }}</span>Rs</h1>
            </div>
            <a class="checkOut" href="{{ route('cart.checkOut') }}">Checkout</a>
        </div>

    </div>
</footer>
@else
<div class="title text-center bg-danger text-light">
    <h2>
        Your cart is empty
    </h2>
</div>
@endif @endsection @section('script')
<script>
    $(".qt-minus").click(function () {
        var quantity = $(this).parent().children(".qt").val();
        if (quantity > 1)
            $(this).parent().children(".qt").val(--quantity);
    });
    $(".qt-plus").click(function () {
        var quantity = $(this).parent().children(".qt").val();
        $(this).parent().children(".qt").val(++quantity);
    });

</script>@endsection
