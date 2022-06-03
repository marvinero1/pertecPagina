<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{--CSRF Token--}}
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{--Title and Meta--}}
        <title>{{ config('app.name') }}</title>
        <script type='text/javascript'>
            document.oncontextmenu = function(){return false}
        </script>
        {{--Common App Styles--}}
        {{ Html::style(mix('assets/app/css/app.css')) }} 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        {{--Styles--}}
        @yield('styles')

        {{--Head--}}
        @yield('head')    
        <link href="http://fonts.cdnfonts.com/css/franklin-gothic-demi-2" rel="stylesheet">
                
    </head>
    
    <body class="@yield('body_class')"> 
        {{--Page--}}
        @yield('page')

        {{--Common Scripts--}}
        {{ Html::script(mix('assets/app/js/app.js')) }} 

        {{--Laravel Js Variables--}}
        @tojs

        {{--Scripts--}}
        @yield('scripts')
        <script type='text/javascript'>
            document.oncontextmenu = function(){return false}
        </script>
    </body>
</html>
