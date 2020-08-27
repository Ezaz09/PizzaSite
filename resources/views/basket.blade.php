@extends('master')

@section('content')
<div class="starter-template">
        @if(session()->has('successAdded'))
            <p class="alert alert-success">Pizza {{ session()->get('successAdded') }} was added to your basket!</p> 
        @endif
        @if(session()->has('successRemove'))
            <p class="alert alert-warning">Pizza {{ session()->get('successRemove') }} was remove from your basket!</p> 
        @endif
    <h1>Basket</h1>
    <p>Order checkout</p>
    <div class="panel">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Count of product</th>
                    <th>Price</th>
                    <th>Total price</th>
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
                    <td><span class="badge"> {{ $product->pivot->count }}</span>
                        <div class="btn-group form-inline">
                            <form action="{{ route('basket-remove',$product->id) }}" method="POST">
                                <button type="submit" class="btn btn-danger" href=""><span
                                        class="glyphicon glyphicon-minus" aria-hidden="true"></span></button>
                                @csrf
                            </form>
                            <form action="{{ route('basket-add',$product->id) }}" method="POST">
                                <button type="submit" class="btn btn-success" href=""><span
                                        class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
                                @csrf
                            </form>
                        </div>
                    </td>
                    <td>{{$product->price}} $</td>
                    <td>{{$product->getPriceForCount()}} {{session('currencySymbol', '$')}}</td>
                </tr>
                @endforeach
                <tr>
                    <td colspan="3">Delivery price:</td>
                    <td>{{$order->getPriceForDelivery()}} {{session('currencySymbol', '$')}}</td>
                </tr>
                <tr>
                    <td colspan="3">Total price:</td>
                    <td>{{ $order->calculateTotalPriceForOrder() }} {{session('currencySymbol', '$')}}</td>
                </tr>
            </tbody>
        </table>
        <br>
        <div class="btn-group pull-right" role="group">
            <a type="button" class="btn btn-success" href="{{ route('basket-place') }}">Arrange
                order</a>
        </div>
    </div>
</div>
@endsection