<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="$1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('public/slide/dist/slippry.css')}}">
        <link rel="stylesheet" href="{{asset('public/css/app.css')}}" />
        <link href='https://fonts.googleapis.com/css?family=Josefin+Slab:700italic' rel='stylesheet' type='text/css'>
      
        <link rel="author" href="humans.txt">
    </head>
    <body>
        @include('layouts.header')
        
        @yield('content')
        
        @include('layouts.footer')
        
        <script src="{{asset('public/js/app.js')}}"></script>
        <script type="text/javascript">
        $(document).ready(function(){
        });
        </script>
    </body>
</html>