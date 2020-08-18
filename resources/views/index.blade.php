@extends('master')

@section('content')
<div class="starter-template">
    <h1>All positions</h1>
    <div class="row">
        @foreach($products as $product)
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="{{$product->srcOfImage}}" alt="Пеперони">
                <div class="caption">
                    <h3>{{$product->name}}</h3>
                    <p>{{$product->price}} {{session('currencySymbol', '$')}}</p>
                    <p>
                        <form action="{{ route('basket-add', $product->id) }}" method="POST">
                            <button type="submit" class="btn btn-primary" role="button">Add to basket</button>
                            <a href="{{ route('pizza', $product->id) }}" class="btn btn-default"
                                role="button">Details</a>
                            @csrf
                        </form>
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection