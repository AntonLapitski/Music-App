<!DOCTYPE html>
<!--<html>-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Tønnes') }}</title>
    <script async type="text/javascript" src="{{ asset('js/slider.js') }}"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin-styles.css') }}" rel="stylesheet">
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
        @if(count($items) > 0)
            <table class="table table-striped">
                <thead>
                    <th>#</th>
                    <th>Name</th>
                    <th>Body</th>
                    <th>Image</th>
                    <th>Audio</th>
                </thead>
                <tbody>
                @foreach($items as $item)
                    <tr>
                        <th>{{ $item->id }}</th>
                        <td>{{ $item->name }}</td>
                        <td><a href="{{ route('admin.edit', ['items' => $item->id]) }}" class="btn btn-default">Edit</a></td>
                        <td>
                            <form action="{{ route('admin.destroy', ['items'=>$item->id]) }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="Delete">
                                <input type="submit" class="btn btn-danger" value="Delete">
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
</section>



<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
