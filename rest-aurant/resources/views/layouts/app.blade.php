<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Rest-Aurant</title>

    <!-- Fonts -->
    <link href="{{asset("css/style.css")}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Styles -->

</head>
<body>
<main>
    @section('header')
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="{{ url('/') }}">Rest-Aurant</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('reservations') }}">Faire une reservation</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('plats') }}">Notre Menu </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
    @show
    @section('body')
        @show
    <footer>
        @section('footer')
        @show
    </footer>
</main>

<script src="../../js/app.js"></script>
</body>
</html>
