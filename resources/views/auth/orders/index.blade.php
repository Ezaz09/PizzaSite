@extends('master')

@section('title', 'Заказы')

@section('content')
    <div class="col-md-12">
        <h1>Orders</h1>
        <table class="table">
            <tbody>
            <tr>
                <th>
                    Number of order
                </th>
                <th>
                    Name
                </th>
                <th>
                    Surname
                </th>
                <th>
                    Delivery address
                </th>
                <th>
                    Total price
                </th>
                <th>
                    Currency of order
                </th>
                <th>
                    Open order
                </th>
            </tr>
            
            @foreach($orders as $order)
                <tr>
                    <td>{{ $order->number_of_order}}</td>
                    <td>{{ $order->name }}</td>
                    <td>{{ $order->surname }}</td>
                    <td>{{ $order->delivery_address }}</td>
                    <td>{{ $order->total_price }} </td>
                    <td>{{ $order->currency_of_order }} </td>
                    <td>
                        <div class="btn-group" role="group">
                            <a class="btn btn-success" type="button"
                               href="{{ route('get-order', $order->number_of_order) }}"
                            >Open</a>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection