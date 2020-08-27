@extends('master')

@section('content')
<div class="starter-template">
    <h1>Order {{$order['number_of_order']}}</h1>
    <div class="panel">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name of product</th>
                    <th>Count of product</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($order->products as $product)
                <tr>
                    <td>
                        <a href="{{ route('pizza', $product->id) }}">
                            <img height="56px" src="{{$product->src_of_image}}">
                            {{$product->name}}
                        </a>
                    </td>
                    <td><span class="badge"> {{ $product->pivot->count }}</span></td>
                    <td> </td>
                    <td> </td>
                </tr>
                @endforeach
                <tr>
                    <td colspan="3">Delivery price:</td>
                    <td>{{$order->getPriceForDelivery()}} {{session('currencySymbol', '$')}}</td>
                </tr>
                <tr>
                    <td colspan="3">Total price:</td>
                    <td>{{ $order->total_price }} {{$order->currency_of_order}}</td>
                </tr>
            </tbody>
        </table>
        <br>
        <div class="btn-group pull-right" role="group">
            <a type="button" class="btn btn-success" href="{{ route('your-account') }}">Back to orders</a>
        </div>
    </div>
</div>
@endsection