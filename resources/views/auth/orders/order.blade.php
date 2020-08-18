@extends('master')

@section('content')
<div class="starter-template">
    <h1>Order {{$order['numberOfOrder']}}</h1>
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
                            <img height="56px" src="{{$product->srcOfImage}}">
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
                    <td>{{$order->getPriceForDelivery()}} {{$order->currencyOfOrder}}</td>
                </tr>
                <tr>
                    <td colspan="3">Total price:</td>
                    <td>{{ $order->totalPrice }} {{$order->currencyOfOrder}}</td>
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