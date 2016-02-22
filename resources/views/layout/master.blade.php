<?php
/**
 * Created by PhpStorm.
 * User: huck
 * Date: 18/02/2016
 * Time: 10:54
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ URL::asset('assets/css/page.css')}}">
        @yield('title')
    </head>
    <body>
        <header>
            <div class="container-fluid">
                @yield('header')
            </div>
        </header>
        <div class="main-content">
            <div class="container">
                @yield('main-content')
            </div>
            <div>
                @yield('sidebar')
            </div>
        </div>
        <footer class="footer">
            @yield('footer')
        </footer>
        <script src = "{{ URL::asset('assets/js/jquery-1.12.0.min.js')}}"></script>
        <script src = "{{ URL::asset('assets/js/page-script.js')}}"></script>
    </body>
</html>