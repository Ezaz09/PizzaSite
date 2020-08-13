
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
            <a class="navbar-brand" href="/">Pizza time!</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/">Все товары</a></li>
                <li ><a href="/categories">Категории</a>
                </li>
                <li ><a href="/basket">В корзину</a></li>
                <li><a href="/reset">Сбросить проект в начальное состояние</a></li>
                <li><a href="/locale/en">en</a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">₽<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                                                    <li><a href="/currency/RUB">₽</a></li>
                                                    <li><a href="/currency/USD">$</a></li>
                                                    <li><a href="/currency/EUR">€</a></li>
                                            </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                                    <li><a href="/login">Войти</a></li>
                
                            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="starter-template">
                            <h1>Все товары</h1>
    <form method="GET" action="/">
        <div class="filters row">
            <div class="col-sm-6 col-md-3">
                <label for="price_from">Цена от                    <input type="text" name="price_from" id="price_from" size="6" value="">
                </label>
                <label for="price_to">до                    <input type="text" name="price_to" id="price_to" size="6"  value="">
                </label>
            </div>
            <div class="col-sm-2 col-md-2">
                <label for="hit">
                    <input type="checkbox" name="hit" id="hit" > Хит                </label>
            </div>
            <div class="col-sm-2 col-md-2">
                <label for="new">
                    <input type="checkbox" name="new" id="new" > Новинка                </label>
            </div>
            <div class="col-sm-2 col-md-2">
                <label for="recommend">
                    <input type="checkbox" name="recommend" id="recommend" > Рекомендуем                </label>
            </div>
            <div class="col-sm-6 col-md-3">
                <button type="submit" class="btn btn-primary">Фильтр</button>
                <a href="/" class="btn btn-warning">Сброс</a>
            </div>
        </div>
    </form>
    <div class="row">
                    <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <div class="labels">
            
            
                    </div>
        <img src="/storage/products/pepperoni.jpg" alt="Пеперони">
        <div class="caption">
            <h3>Пепперони</h3>
            <p>500 ₽</p>
            <p>
            <form action="/basket/add/1" method="POST">
                                    <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                                <a href="/pizza/pepperoni"
                   class="btn btn-default"
                   role="button">Подробнее</a>
                <input type="hidden" name="_token" value="5xuns3158vHpfAY5gslisVYNVdPidQ8lujVkhM0u">            </form>
            </p>
        </div>
    </div>
</div>
                    <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <div class="labels">
            
            
                    </div>
        <img src="/storage/products/margarita.jpg" alt="Маргарита">
        <div class="caption">
            <h3>Маргарита</h3>
            <p>600 ₽</p>
            <p>
            <form action="/basket/add/2" method="POST">
                                    <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                                <a href="/pizza/margarita"
                   class="btn btn-default"
                   role="button">Подробнее</a>
                <input type="hidden" name="_token" value="5xuns3158vHpfAY5gslisVYNVdPidQ8lujVkhM0u">            </form>
            </p>
        </div>
    </div>
</div>
                    <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <div class="labels">
            
            
                    </div>
        <img src="/storage/products/4cheese.jpg" alt="4 сыра">
        <div class="caption">
            <h3>4 сыра</h3>
            <p>400 ₽</p>
            <p>
            <form action="/basket/add/3" method="POST">
                                    <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                                <a href="/pizza/4_cheese"
                   class="btn btn-default"
                   role="button">Подробнее</a>
                <input type="hidden" name="_token" value="5xuns3158vHpfAY5gslisVYNVdPidQ8lujVkhM0u">            </form>
            </p>
        </div>
    </div>
</div>
                    <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <div class="labels">
            
            
                    </div>
        <img src="/storage/products/carbonara.jpg" alt="Карбонара">
        <div class="caption">
            <h3>Карбонара</h3>
            <p>700 ₽</p>
            <p>
            <form action="/basket/add/4" method="POST">
                                    <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                                <a href="/pizza/carbonara"
                   class="btn btn-default"
                   role="button">Подробнее</a>
                <input type="hidden" name="_token" value="5xuns3158vHpfAY5gslisVYNVdPidQ8lujVkhM0u">            </form>
            </p>
        </div>
    </div>
</div>
                    <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <div class="labels">
            
            
                    </div>
        <img src="/storage/products/crudo.jpg" alt="Крудо">
        <div class="caption">
            <h3>Крудо</h3>
            <p>550 ₽</p>
            <p>
            <form action="/basket/add/5" method="POST">
                                    <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                                <a href="/pizza/crudo"
                   class="btn btn-default"
                   role="button">Подробнее</a>
                <input type="hidden" name="_token" value="5xuns3158vHpfAY5gslisVYNVdPidQ8lujVkhM0u">            </form>
            </p>
        </div>
    </div>
</div>
                    <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <div class="labels">
            
            
                    </div>
        <img src="/storage/products/neapolitano.jpg" alt="Неаполитано">
        <div class="caption">
            <h3>Неаполитано</h3>
            <p>650 ₽</p>
            <p>
            <form action="/basket/add/6" method="POST">
                                    <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                                <a href="/pizza/neapolitano"
                   class="btn btn-default"
                   role="button">Подробнее</a>
                <input type="hidden" name="_token" value="5xuns3158vHpfAY5gslisVYNVdPidQ8lujVkhM0u">            </form>
            </p>
        </div>
    </div>
</div>
            </div>


    </div>
</div>
</body>
</html>
