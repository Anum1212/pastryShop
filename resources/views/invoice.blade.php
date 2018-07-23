@extends('layouts.remainingPages') @section('tabTitle', 'Invoice') @section('head')
<link href="{{ asset('css/site/invoice.css') }}" rel="stylesheet">
<link href="{{ asset('css/site/remainingPages.css') }}" rel="stylesheet">
<link href="{{ asset('css/site/table.css') }}" rel="stylesheet"> @endsection @section('style') 
@endsection
@section('body')
<div class="topImage">
    @include('includes.navBarDark')
</div>
<div class="title text-center bg-danger text-light">
    <h2>
        Invoice
    </h2>
</div>
    <div class="invoice container">
                @include('includes.error')
        @include('includes.message')
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-6">
                        <address>
                            <strong>Billed To:</strong>
                            <br> {{$customerDetails->name}}
                            <br> {{$customerDetails->address}}
                            <br> {{$customerDetails->society}}
                            <br> {{$customerDetails->city}}
                        </address>
                    </div>
                    <div class="col-6 text-right">
                        <address>
                            <strong>Shipped To:</strong>
                            <br> {{$customerDetails->name}}
                            <br> {{$customerDetails->address}}
                            <br> {{$customerDetails->society}}
                            <br> {{$customerDetails->city}}
                        </address>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <address>
                            <strong>Payment Method:</strong>
                            <br> Cash on Delivery
                        </address>
                    </div>
                    <div class="col-6 text-right">
                        <address>
                            <strong>Order Date:</strong>
                            <br> {{ \Carbon\Carbon::parse($order->created_at)->format('d/m/Y')}}
                            <br>
                            <br>
                        </address>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <strong>Order</strong># {{ $order->id }}
                        </h3>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <td class="text-center">
                                            <strong>Item</strong>
                                        </td>
                                        <td class="text-center">
                                            <strong>Price</strong>
                                        </td>
                                        <td class="text-center">
                                            <strong>Quantity</strong>
                                        </td>
                                        <td class="text-center">
                                            <strong>Totals</strong>
                                        </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                    <tr>
                                        <td class="text-center">{{$product->name}}</td>
                                        <td data-label="Price" class="text-center">{{$product->price}}</td>
                                        <td data-label="Quantity" class="text-center">{{$product->qty}}</td>
                                        <td data-label="SubTotal" class="text-center">{{$product->price*$product->qty}}</td>
                                    </tr>
                                    @endforeach
                                    <tr>
                                        <td colspan="2" class="no-line text-center">
                                            <strong>Subtotal</strong>
                                        </td>
                                        <td colspan="2" class="no-line text-center">{{$order->cost}}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="no-line text-center">
                                            <strong>Total</strong>
                                        </td>
                                        <td colspan="2" class="no-line text-center">{{$order->cost}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection @section('script') @endsection
