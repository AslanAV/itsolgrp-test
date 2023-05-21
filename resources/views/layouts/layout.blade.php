<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="csrf-param" content="_token" />
    <title>Тредиум</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-light mb-4">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Тредиум</a>
        <div class="row align-items-end">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link @if(request()->routeIs('home')) active @endif"
                       aria-current="page" href="{{ route('home') }}">На Главную</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(request()->routeIs('articles') || request()->routeIs('article')) active @endif"
                       aria-current="page" href="{{ route('articles') }}">Каталог Статей</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main class="container">
    @yield('content')
</main>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>

<footer class="bg-light text-center text-lg-start container">
    <!-- Grid container -->
    <div class="container p-4">
        <!--Grid row-->
        <div class="row">
            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h3 class="text-uppercase">Тредиум</h3>

                <ul class="list-unstyled mb-0">
                    <li>
                        <p>© 3001-3020 Все права защищены</p>
                    </li>
                </ul>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <ul class="list-unstyled">
                    <li>
                        <p>Блог</p>
                    </li>
                    <li>
                        <p>Как перестать прокрастинировать и начать жить</p>
                    </li>
                </ul>
            </div>
            <!--Grid column-->


        </div>
        <!--Grid row-->
    </div>
    <!-- Grid container -->
</footer>
</body>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


<script type="text/javascript">

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".like-btn-submit").click(function(e){

        e.preventDefault();

        var article_id = $("input[article_id=article_id]").val();

        $.ajax({
            type:'POST',
            url:"{{ route('api_likes') }}",
            data:{article_id:article_id},
            success:function(data){
                alert(data.message);
            }
        });

    });
</script>

</html>
