@section('head')
        <!doctype html>
<html lang="{{ app()->getLocale() }}">
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
          crossorigin="anonymous">
    <link href="{{ asset('public/css/album.css') }}" rel="stylesheet" type="text/css" >
    <title>Youtube Channels</title>
</head>

<body>

<header>

    <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container d-flex justify-content-between">

            <a href="/" class="navbar-brand d-flex align-items-center">
                <img src="data:image/png;base64,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">
                <strong>Youtube channels</strong>
            </a>
        </div>
    </div>
</header>

<main role="main">

    <section class="jumbotron text-center" style="background-color:#fff">
        <div class="container">
            <h1 class="jumbotron-heading">What's new on Youtube</h1>
            <p class="lead text-muted">Парсер новых Youtube каналов. Сервис реализован через Google API. Бэкэнд на Laravel.</p>
            <p>
                        <a href="/update" class="btn btn-success my-2">Обновить</a>

            </p>
        </div>
    </section>

    @show
    <div class="album py-5 bg-light">
        <div class="container">
            @section('content')

            @show
        </div>
    </div>

    @section('footer')
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
@show