<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="$1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('public/css/admin.css')}}" />
        <link href='https://fonts.googleapis.com/css?family=Josefin+Slab:700italic' rel='stylesheet' type='text/css'>
      
        <link rel="author" href="humans.txt">
    </head>
    <body>
        @include('layouts.admin_header')
        @if(session('success'))
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <strong>Success!</strong> {{session('success')}}.
            </div>
        @endif
        @yield('content')
        
        @include('layouts.admin_footer')
        
        <script src="{{asset('public/js/app.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/ckeditor/ckeditor.js')}}"></script>
        <script type="text/javascript">
        $(document).ready(function(){
             $('input#input_text, textarea#textarea1').characterCounter();
              CKEDITOR.replace( 'contents' );
        });
        </script>
    </body>
</html>