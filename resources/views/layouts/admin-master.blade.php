<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    {{Html::style('css/bootstrap.min.css')}}
    {{Html::style('css/bootstrap-grid.min.css')}}
    {{Html::style('css/bootstrap-reboot.min.css')}}
    {{Html::style('css/admin.home.css')}}
    {{Html::style('css/users.home.css')}}
    {{Html::style('css/global.css')}}
    {{Html::script('https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js')}}
    {{Html::script('https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js')}}
    {{Html::script('https://cdn.jsdelivr.net/sweetalert2/6.4.4/sweetalert2.min.js')}}
    {{Html::script('js/bootstrap.min.js')}}
</head>
<body>
    @yield('content')
</body>
</html>