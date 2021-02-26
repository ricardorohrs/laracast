<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<!--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="/css/fonts.css" rel="stylesheet" type="text/css" media="all" />
    <link href="/css/default.css" rel="stylesheet" type="text/css" media="all"/>
<!--        <link href="/css/app.css" rel="stylesheet"/>-->

    @yield('head')

</head>
<body>
<div id="header-wrapper">
    <div id="header" class="container">
        <div id="logo">
            <h1><a href="/">SimpleWork</a></h1>
        </div>
        <div id="menu">
            <ul>
                <li class="{{ Request::path() === '/' ? 'current_page_item' : '' }}"><a href="/" accesskey="1" title="">Home</a></li>
                <li class="{{ Request::path() === 'about' ? 'current_page_item' : '' }}"><a href="/about" accesskey="3" title="">Sobre</a></li>
                <li class="{{ Request::path() === 'articles' ? 'current_page_item' : '' }}"><a href="/articles" accesskey="4" title="">Blog</a></li>
                <li class="{{ Request::path() === 'login' ? 'current_page_item' : '' }}"><a href="/login" accesskey="2" title="">Login</a></li>
                <li class="{{ Request::path() === 'register' ? 'current_page_item' : '' }}"><a href="/register" accesskey="5" title="">Registrar</a></li>
            </ul>
        </div>
    </div>
    @yield ('header')
</div>
@yield ('content')

@yield ('email')
<div id="copyright" class="container">
    <p>&copy; Ricardo Röhrs. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotograph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>
</body>
</html>
