<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/atelier-heath-dark.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- styles -->
    <style>
        html, body {
            background-color: #a1cbef ;
        }
        </style>
</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color:#0175C2 !important">

    <a class="navbar-brand" href="{{route('home')}}">Inicio</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('articulos')}}">Artículos<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('tutoriales')}}">Tutoriales</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle"  href="{{route('noticias')}} "role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Noticias
                </a>
                <div class="dropdown-menu" >
                    <a class="dropdown-item" href="{{route('noticias')}}">Eventos</a>
                    <a class="dropdown-item" href="#">Trabajos</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Ideas</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Proximamente</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Buscar algo" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" >Buscar</button>
        </form>
    </div>
</nav>
@yield('contenido')
