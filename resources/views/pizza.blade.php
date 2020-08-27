@extends('master')

@section('content')
<div class="starter-template">
    <h1>{{$product->name}}</h1>
    <p>Price: <b>{{$product->price}} {{session('currencySymbol', '$')}}</b></p>
    <img src="{{$product->src_of_image}}">
    <p>{{$product->description}}</p>

    <form action="{{ route('basket-add', $product->id) }}" method="POST">
        <button type="submit" class="btn btn-success" role="button">Add to basket</button>
        @csrf
    </form>
</div>
@endsection