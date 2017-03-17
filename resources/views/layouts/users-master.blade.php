<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    {{Html::style('css/bootstrap.min.css') }}
    {{Html::style('css/bootstrap-grid.min.css') }}
    {{Html::style('css/bootstrap-reboot.min.css') }}
    {{Html::style('css/global.css') }}
    {{Html::style('css/googlemaps.css') }}
    {{Html::style('css/slideshow.css') }}
    {{Html::style('css/users.home.css') }}
    {{Html::style('css/users.estimations.css') }}
    {{Html::style('css/users.gallery.css') }}
    {{Html::style('css/users.main.gallery.css') }}
    {{Html::style('css/users.profile.css') }}
    {{Html::style('https://fonts.googleapis.com/css?family=Raleway') }}

    {{Html::script('https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js') }}
    {{Html::script('https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js') }}
    {{Html::script('js/bootstrap.min.js') }}
    {{Html::script('js/googlemaps.js') }}
    {{Html::script('js/slideshow.js') }}
    {{Html::script('js/users.home.js') }}
    {{Html::script('js/users.estimations.js') }}
    {{Html::script('js/users.gallery.js') }}
    {{Html::script('js/users.profile.js') }}
</head>
<body>
    @yield('content')
</body>
</html>