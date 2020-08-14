@extends('master')

@section('content')
        <div class="starter-template">
            <h1>{{$product->name}}</h1>
            <p>Price: <b>{{$product->price}} $</b></p>
            <img src="{{$product->srcOfImage}}">
            <p>{{$product->description}}</p>

            <form action="/basket/add/{{$product->id}}" method="POST">
                <button type="submit" class="btn btn-success" role="button">Add to basket</button>

                <input type="hidden" name="_token" value="5xuns3158vHpfAY5gslisVYNVdPidQ8lujVkhM0u"> </form>
        </div>
@endsection