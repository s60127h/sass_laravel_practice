<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- <script src="/js/app.js"></script> -->
    <!-- <link rel="stylesheet" href="public/css/navbar.css" /> -->
    <link rel="stylesheet" href="{{ mix('css/navbar.css') }}" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="<?php echo config('user_setting.font_awesome_token'); ?>" crossorigin="anonymous">
</head>
<body>
    @yield('navbar')
    @yield('content')
</body>
</html>
