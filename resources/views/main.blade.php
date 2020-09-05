<!DOCTYPE html>
<!--<html>-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Tønnes') }}</title>
    <script async type="text/javascript" src="{{ asset('js/slider.js') }}"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" >
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
                    <li><a href="#header__id">Home</a></li>
                    <li><a href="{{route('music')}}">Posts</a></li>
                    <li><a href="#author__id">About us</a></li>
                    <li><a href="#pre__footer__id">Contacts</a></li>
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
                <span class="pre__title">Sca</span>ndinavian Soft from Tønnes
            </h1>
        </div>
    </div>
</div>

<!-- Author section -->
<section id="author__id" class="author__letter">
    <div class="container">
        <div class="author__letter__wrapper">
            <div class="letter">
                T
            </div>
            <div class="letter">
                O
            </div>
            <div class="letter">
                N
            </div>
            <div class="letter">
                N
            </div>
            <div class="letter">
                E
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
            <h2 class="author__heading news">Tønnes</h2>
            <img class="author__image" src="img/me.jpg">
            <p class="author__text">My soft is an accumulator of ideas that based on high level skills and long-term experience. I started programming when i was 16 years old. I respect all customers and their needs.  <a class="custom__link" href="https://www.youtube.com/channel/UCqld9p_ejlAKBwhqzFQ_qJA?view_as=subscriber">NordicSoft</a> is a way to fulfill customer needs and wants with high quality code. Send us email. We use laravel and symfony technologies. Enjoy!</p>
        </div>
        <div class="author__content__wrapper">
            <div class="author__box">
                <h1>P</h1>
                <p>My code is based on mathematical theory and algorithmic mights</p>
            </div>
            <div class="author__box">
                <h1>M</h1>
                <p>Awesome code is a result of skills gained through a years of practice.</p>
            </div>
            <div class="author__box">
                <h1>H</h1>
                <p>Gained knowledge and scientific attitude to problem solving</p>
            </div>
        </div>
    </div>
</section>

<!-- Video Section -->
<section class="video__handler">
    <div class="container">
        <div class="video__wrapper">
            <h2 class="news">Marketing</h2>
            <iframe class="video" width="560" height="315" src="https://www.youtube.com/embed/Jff5mxvNGUQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe class="video" width="560" height="315" src="https://www.youtube.com/embed/fSdWQnfO9WM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</section>

<!-- Video Section -->
<section class="video__handler">
    <div class="container">
        <div class="video__wrapper">
            <h2 class="news">My music project</h2>
            <iframe class="video" width="560" height="315" src="https://www.youtube.com/embed/wzVvRZMxyV4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe class="video" width="560" height="315" src="https://www.youtube.com/embed/46BjCNH-FZ4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe class="video" width="560" height="315" src="https://www.youtube.com/embed/VTO73rNucwY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe class="video" width="560" height="315" src="https://www.youtube.com/embed/Nt14hN_svq8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</section>


<!-- Blog Section -->
<section class="blog">
    <div class="container">
        <div class="centered">
            <h2 class="news">Latest Post</h2>
            <h2>{{$item->name}}</h2>
            <img src="/storage/img/{{$item->image}}" alt="">
            <p>{{$item->body}}</p>
            <audio controls>
                <source src="{{ url('/') }}/storage/audio/{{$item->audio}}" type="audio/mpeg">
                Your browser does not support the audio element.
            </audio>
        </div>
    </div>

</section>

<section class="container-test">
    <div class='hero_cont'>
        <div class="hero"></div>
    </div>
    <div class='intro_cont'>
        <div class="container">
            <div class="citate">
                <div class="citate-box">
                    <i class="fa fa-quote-right fa-4x size"></i>
                    <p class="citate-text news">Soft to me is a way to see the world and it's dimensions and angles.
                    </p>
                    <p class="citate-text news">Soft för mig är ett sätt att se världen och dess dimensioner och vinklar.</p>
                    <p class="citate-text news">Soft for meg er en måte å se verden på og dens dimensjoner og vinkler.</p>
                    <p class="citate-text news">Soft for mig er en måde at se verden på, og det er dimensioner og vinkler.</p>
                    <p class="citate-text news">Soft ist für mich eine Möglichkeit, die Welt und ihre Dimensionen und Winkel zu sehen.</p>
                </div>
                <div class="citate-box">
                    <div class="item">
                        <img class="citate-image" src="img/me.jpg">
                        <span class="caption">Tønnes</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--</section>-->

<section class="container-test">
    <div class='intro_test'>
        <div class="container">
            <h2 class="positioned">Acknowledgement</h2>
            <img src="{{ asset('img/certificate.jpg') }}" alt="">
        </div>
    </div>
</section>




<!-- Footer section -->
<div id="pre__footer__id" class="pre__footer">
    <div class="container">
        <div class="footer__division">
            <div class="footer__divided fixer">
                <h3 class="location__heading">Location</h3>
                <p class="location__text">Republic of Belarus,
                    <br>Minsk, Belomorskaya str., 220002 </p>
            </div>
            <div class="footer__divided fixed">
                <h3>Links: </h3>
                <ul class="fixed__list">
                    <li>Home</li>
                    <li>Blog</li>
                    <li>About</li>
                    <li>Contacts</li>
                </ul>
            </div>
            <div class="footer__divided fixus">
                <h3 class="contacts-last">Contacts</h3>
                <i class="fa fa-envelope"><h5>a.laptski.developer@gmail.com</h5></i>
                <i class="fa fa-phone"><h5>+375447606912</h5></i>
                <h5 class="h5-card" style="margin-top: 20px">Card: 5489 5296 0109 9929</h5>
                <h5 class="h5-github" style="margin-top: 20px">Github: https://github.com/AntonLapitski</h5>
            </div>
        </div>
    </div>
</div>

<footer class="footer">
    <h2>Copyright 2015 Tønnes. All Rights Reserved.
        Made by Tønnes Lapitski.</h2>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
</body>
</html>
