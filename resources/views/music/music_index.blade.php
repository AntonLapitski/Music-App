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
                <h1 id="tonnes">Nordic</h1>
            </div>
            <div class="header__menu">
                <ul class="menu">
                    <li><a href="{{route('main')}}">Home</a></li>
                    <li><a href="{{route('music')}}">Music</a></li>
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
                <span class="pre__title music">Mus</span>ic
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
                M
            </div>
            <div class="letter">
                U
            </div>
            <div class="letter">
                S
            </div>
            <div class="letter">
                I
            </div>
            <div class="letter">
                C
            </div>
        </div>
    </div>
</section>

<section class="author">
    <div class="container">
        <div class="author__wrapper">
            <div class="author_handler">
                <h2>Title</h2>
                <p>12/12/12 12:12</p>
                <img src="img/posts/post-two.jpeg" alt="">
                <p style="text-align: left">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                    voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                    non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                    voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                    non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <audio controls>
                    <source src="{{ url('/') }}/storage/music/gzuz-wolke-7.mp3" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>
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
