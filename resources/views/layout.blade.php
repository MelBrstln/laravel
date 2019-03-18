<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>@yield('MetaTitle')</title>


    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.3/examples/starter-template/starter-template.css" rel="stylesheet">
<!-- <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" /> -->
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="/">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/products">Catalogue <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/basket">Panier</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin" tabindex="-1" aria-disabled="true">Admin</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Navigation</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="/">Home</a>
                    <a class="dropdown-item" href="/products">Catalogue</a>
                    <a class="dropdown-item" href="/basket">Panier</a>
                    <a class="dropdown-item" href="/a-propos">A propos</a>
                    <a class="dropdown-item" href="/contacts">Contact</a>
                </div>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>

<!-- <main role="main" class="container"> -->
<main role="main" >

    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Notre Boutique Illot</h1>
            <p class="lead text-muted">Bienvenue sur notre super site Boutique en ligne.<br> Nous esperons vous procurer une experience agéable.</p>
            <p>
                <a href="#" class="btn btn-primary my-2">Parcourir le catalogue</a>
                <a href="#" class="btn btn-secondary my-2">Créer un compte</a>
            </p>

            <p>
                <h2>@yield('content')</h2>
            </p>
        </div>
    </section>
</main>

<main role="main" class="container">
    <div class="content">
        <div class="title m-b-md">
            <div class="links">
                <center>@yield('content')</center><br>
                <center>@yield('listContact')</center>
            </div>
            @yield('contactTitle', '')
        </div>
    </div>

    <div class="row">
        <div class="col-md-2">        
            <center>Incitation achat 01</center><br>
            <center>Soyez dans le coups et pas dans la gorge avec LoremIpsum...</center><br>
        </div>
        <!--<div class="col-sm-8">-->
        <div class="col-md-8">
            <center>@yield('contact')</center>
            <center>@yield('a_propos', '')</center>
            <center>@yield('show_products')</center>
            <center>@yield('one_product')</center>
        </div>
        <div class="col-md-2">
            <center>Incitation achat 02</center><br>
            <center>Le dernier super sac à la mode...</center><br>
        </div>
    </div>

    <div class="row">
        <div class="col-md-2">        
            <center>Incitation achat 03</center><br>
            <center>Essayez LoremIpsum...</center><br>
        </div>
        <!--<div class="col-sm-8">-->
        <div class="col-md-8">
            <center>@yield('sidebar')</center>
        </div>
        <div class="col-md-2">
            <center>Incitation achat 04</center><br>
            <center>Ce product est fait pour vous !</center><br>
        </div>
    </div>

</main><!-- /.container -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="https://getbootstrap.com/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script></body>
</body>
</html>
