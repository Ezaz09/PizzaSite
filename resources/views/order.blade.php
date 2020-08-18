@extends('master')

@section('title', 'Оформить заказ')

@section('content')
<div class="starter-template">
    <h1>Accept order</h1>
    <div class="container">
        <div class="row justify-content-center">
            <p>Total price for order: <b>{{ $information['totalPrice'] }} $.</b></p>
            <form action="{{ route('basket-confirm') }}" method="POST">
                <div>
                    <p>Enter information about yourself for order:</p>

                    <div class="container">
                        <div class="form-group">
                            <label for="name" class="control-label col-lg-offset-3 col-lg-2">Name:
                            </label>
                            <div class="col-lg-4">
                                @if( $information['user'] != null)
                                <input type="text" required name="name" id="name" value="{{ $information['user']['name'] }}" class="form-control">
                                @else 
                                <input type="text" required name="name" id="name" value="" class="form-control">
                                @endif
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <label for="name"
                                class="control-label col-lg-offset-3 col-lg-2">Surname: </label>
                            <div class="col-lg-4">
                                @if( $information['user'] != null)
                                <input type="text" required name="surname" id="surname" value="{{ $information['user']['surname'] }}" class="form-control">
                                @else 
                                <input type="text" required name="surname" id="surname" value="" class="form-control">
                                @endif
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <label for="deliveryAddress"
                                class="control-label col-lg-offset-3 col-lg-2">Delivery address: </label>
                            <div class="col-lg-4">
                                <input type="text" required name="deliveryAddress" id="deliveryAddress" value="" class="form-control">
                            </div>
                        </div>
                    
                    </div>
                    <br>
                    @csrf
                    <input type="submit" class="btn btn-success" value="Approve order">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection