<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'เว็บของฉัน') </title>
</head>
<body>

    <a href="/">หน้าแรก</a> | <a href="/about">about</a> | <a href="/contact">contact</a>
    <hr>
    @yield('content')
</body>
</html>
