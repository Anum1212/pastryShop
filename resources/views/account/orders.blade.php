@extends('layouts.dashboard') @section('head')
<link href="{{ asset('css/site/table.css') }}" rel="stylesheet">
<link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet"> @endsection @section('style') @endsection @section('body') @section('pageTitle', 'Orders')
<div class="table-responsive">
    <table class="table table-condense">
        <thead>
            <tr>
                <td>
                    <strong>Order#</strong>
                </td>
                <td>
                    <strong>Cost</strong>
                </td>
                <td>
                    <strong>Order Date</strong>
                </td>
                <td>
                    <strong>Details</strong>
                </td>
            </tr>
        </thead>
        <tbody>

            @foreach ($orders as $order)
            <tr>
                <td class="reduceSize align-middle" data-label="Order#">
                    {{ $order->id }}
                </td>
                <td class="reduceSize align-middle" data-label="Cost">
                    {{ $order->cost }}
                </td>
                <td class="reduceSize align-middle" data-label="Order Date">
                    {{ ($order->created_at)->format('d/m/Y')}}
                </td>
                <td class="reduceSize align-middle" data-label="Details">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#order{{ $order->id }}" aria-expanded="false"
                        aria-controls="order{{ $order->id }}" onclick="$(this).closest('tr').next('tr').toggle();">
                        <i class="fa fa-search"></i>
                    </button>
                </td>
            </tr>
            <tr class="child">
                <td colspan="4">
                    <div class="collapse" id="order{{ $order->id }}">
                        @if (Auth::user()->userType == '0')
                        <div class="card">
                            <div class="card-header bg-dark text-light">
                                Customer Details
                            </div>
                            <div class="table-responsive">
                            <table class="table table-condensed table-hover">
                                <tbody>
                                    @foreach ($customerDetails as $customerDetail) @if($customerDetail->id == $order->customerId)
                                    <tr>
                                        <td class="pull-left"><b> Name</b></td>
                                        <td>{{ $customerDetail->name }}</td>
                                    </tr>
                                    <tr>
                                        <td class="pull-left"><b> Email</b></td>
                                        <td>{{ $customerDetail->email }}</td>
                                    </tr>
                                    <tr>
                                        <td class="pull-left"><b> Contact</b></td>
                                        <td>{{ $customerDetail->contact }}</td>
                                    </tr>
                                    <tr>
                                        <td class="pull-left"><b> Address</b></td>
                                        <td>{{ $customerDetail->address }}</td>
                                    </tr>
                                    @endif @endforeach
                                </tbody>
                            </table>
                        </div>
                        </div>
                        @endif
                        <div class="table-responsive">
                            <table class="table table-condensed table-hover">
                                <thead>
                                    <tr class="bg-dark text-light">
                                        <td colspan="4">
                                            Order Details
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <strong>Item</strong>
                                        </td>
                                        <td>
                                            <strong>Price</strong>
                                        </td>
                                        <td>
                                            <strong>Quantity</strong>
                                        </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orderItems as $orderItem) @if($orderItem->orderId == $order->id)
                                    <tr>
                                        <td colspan="2" class="align-middle" data-label="Item">{{ $orderItem->productName }}</td>
                                        <td class="align-middle" data-label="Price">{{ $orderItem->price }}</td>
                                        <td class="align-middle" data-label="Quantity">{{ $orderItem->quantity }}</td>
                                    </tr>
                                    @endif @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="gap">
        {{ $orders->links() }}
    </div>
</div>
</div>
@endsection @section('script')
<script>
    $(document).ready(function () {
        $(".child").hide();
    });
</script>@endsection