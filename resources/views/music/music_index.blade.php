<!DOCTYPE html>
<!--<html>-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Tønnes') }}</title>
    <script async type="text/javascript" src="{{ asset('js/slider.js') }}"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/music-styles.css') }}" rel="stylesheet">
    <link href="{{ asset('img/hammer.png') }}" rel="shortcut icon" type="image/png">
    <link href="https://fonts.googleapis.com/css?family=Spartan&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>

<!-- Header section -->
<header class="header">
    <div class="container">
        <div class="header__inner">
            <div class="header__logo">
                <h1 id="tonnes">NordicSoft</h1>
            </div>
            <div class="header__menu">
                <ul class="menu">
                    <li><a href="{{route('main')}}">Home</a></li>
                    <li><a href="{{route('music')}}">Posts</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>

<!-- Intro Section -->
<div id="header__id" class="intro">
    <div class="fix">
        <div class="container">
            <h1 class="intro__text">
                <span class="pre__title music">Pos</span>ts
            </h1>
            <div class="arrow">
                <div class="arrow-down"></div>
            </div>
        </div>
    </div>
</div>

<!-- Author section -->
<section id="author__id" class="author__letter">
    <div class="container">
        <div class="author__letter__wrapper">
            <div class="letter">
                P
            </div>
            <div class="letter">
                O
            </div>
            <div class="letter">
                S
            </div>
            <div class="letter">
                T
            </div>
            <div class="letter">
                S
            </div>
        </div>
    </div>
</section>

<section class="author">
    <div class="container">
        <div class="author__wrapper">
            <div class="author_handler">
                @foreach($items as $item)
                    <div class="author_content">
                        <h2 style="color: #fff0ff">{{$item->name}}</h2>
                        <p style="color: #fff0ff">{{$item->created_at}}</p>
                        <img src="/storage/img/{{$item->image}}" alt="">
                        <p style="text-align: left; color: #fff0ff">
                            {{$item->body}}
                        </p>
                        <audio controls>
                            <source src="{{ url('/') }}/storage/audio/{{$item->audio}}" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                    </div>
                @endforeach
            </div>
            <div class="row text-center">
                {{ $items->links() }}
            </div>
        </div>
    </div>
</section>


<footer class="footer">
    <h2>Copyright 2015 Tønnes. All Rights Reserved.
        Made by Tønnes Lapitski.</h2>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
