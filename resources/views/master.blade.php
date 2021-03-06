<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pizza time!</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/starter-template.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ route('index') }}">Pizza time!</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    @if(is_null(session('countOfProduct')))
                    <li><a href="{{ route('basket') }}">To basket</a></li>
                    @else
                    <li><a href="{{ route('basket') }}">To basket ({{session('countOfProduct', '')}})</a></li>
                    @endif
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                            aria-expanded="false">{{session('currencySymbol', '$')}}<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                           @foreach(App\Services\CurrencyConvertion::getCurrencies() as $currency)
                           <li><a href="{{ route('currency',  $currency->code) }}">{{ $currency->symbol }}</a></li>
                           @endforeach
                        </ul>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    @guest
                    <li><a href="{{ route('login') }}">Login</a></li>
                    @endguest

                    @auth
                    <li><a href="{{ route('your-account') }}">Your account</a></li>
                    <li><a href="{{ route('get-logout') }}">Logout</a></li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        @if(session()->has('successConfirm'))
        <p class="alert alert-success"> {{ session()->get('successConfirm') }}</p>
        @endif
        @if(session()->has('emptyBasket'))
        <p class="alert alert-warning"> {{ session()->get('emptyBasket') }}</p>
        @endif
        @yield('content')
    </div>

</body>

</html>