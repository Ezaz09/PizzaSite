@extends('master')

@section('content')
        <div class="starter-template">
            <h1>Все товары</h1>
            <form method="GET" action="{{ route('index') }}">
                <div class="filters row">
                    <div class="col-sm-6 col-md-3">
                        <label for="price_from">Цена от <input type="text" name="price_from" id="price_from" size="6"
                                value="">
                        </label>
                        <label for="price_to">до <input type="text" name="price_to" id="price_to" size="6" value="">
                        </label>
                    </div>
                    <div class="col-sm-2 col-md-2">
                        <label for="hit">
                            <input type="checkbox" name="hit" id="hit"> Хит </label>
                    </div>
                    <div class="col-sm-2 col-md-2">
                        <label for="new">
                            <input type="checkbox" name="new" id="new"> Новинка </label>
                    </div>
                    <div class="col-sm-2 col-md-2">
                        <label for="recommend">
                            <input type="checkbox" name="recommend" id="recommend"> Рекомендуем </label>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <button type="submit" class="btn btn-primary">Фильтр</button>
                        <a href="/" class="btn btn-warning">Сброс</a>
                    </div>
                </div>
            </form>
            <div class="row">
                @foreach($products as $product)
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="{{$product->srcOfImage}}" alt="Пеперони">
                        <div class="caption">
                            <h3>{{$product->name}}</h3>
                            <p>{{$product->price}} $</p>
                            <p> 
                                <form action="/basket/add/{{$product->id}}" method="POST">
                                    <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                                    <a href="{{ route('pizza', $product->id) }}" class="btn btn-default" role="button">Подробнее</a>
                                    <input type="hidden" name="_token" value="5xuns3158vHpfAY5gslisVYNVdPidQ8lujVkhM0u">
                                </form>
                            </p>
                        </div>
                    </div>
                </div> 
                @endforeach
            </div>
        </div>
@endsection