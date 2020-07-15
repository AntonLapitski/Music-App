<!DOCTYPE html>
<!--<html>-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Tønnes') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin-create-styles.css') }}" rel="stylesheet">
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
                <h1 id="tonnes">Admin</h1>
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

<section class="display">
    <div class="container">
        <h2 class="heading">New Post</h2>
        <div class="form handler">
            <form enctype="multipart/form-data" action="{{route('admin.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label class="naming" for="name">Post name</label>
                    <input class="form-control" type="text" name="postName" placeholder="Enter name of post" id="name">
                </div>
                <div class="form-group">
                    <label class="naming" for="body">Post body</label>
                    <textarea class="form-control" name="postBody" id="body" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <label class="naming" for="image">Image</label>
                    <input type="file" name="image" id="image">
                </div>
                <div class="form-group">
                    <label class="naming" for="audio">Audio</label>
                    <input type="file" name="audio" id="audio">
                </div>
                <button type="submit" class="btn btn-primary for-submit">Submit</button>
            </form>
        </div>
    </div>
</section>



<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
