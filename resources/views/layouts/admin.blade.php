<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="$1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title')</title>
        <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('public/css/admin.css')}}" />
        <link href='https://fonts.googleapis.com/css?family=Josefin+Slab:700italic' rel='stylesheet' 
        type='text/css'>
        <script src="{{asset('public/js/admin.js')}}"></script>
        
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
        <script type="text/javascript">
        $(document).ready(function(){
            $(".delete").click(function(e){
                 e.preventDefault();
                      e.preventDefault();
              return swal({
                title: 'Are you sure?',
                text: 'Once a record is deleted from the databse can\'t be recovered' ,
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#DD6B55',
                confirmButtonText: 'Yes Delete This Record',
                cancelButtonText: 'No',
                closeOnConfirm: false,
                closeOnCancel: false,
              }, (function(_this) {
                return function(isConfirm) {
                  if (isConfirm) 
                  { var status ='false';
                    $.ajax(
                    {
                        headers: 
                        {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: $(_this).attr("href"),
                        dataType: "GET",
                        method: "GET",
                        success: function(data)
                        {
                            if(data="OK")
                            {
                               status=true;
                            }

                        }
                    });
                    
                    if(statu=true)
                    {
                        swal(
                                'Deleted!', 
                                'Your record has been deleted from the databse.', 'success'
                            ); 
                        setTimeout(function()
                        {
                            location.reload();
                        }, 1000);
                    }
                    else
                    {
                        swal(
                            'Deleted!', 
                            'We couldn\'t delete your record from the databse.', 'success'
                        ); 
                        setTimeout(function()
                        {
                            location.reload();
                        }, 1000);
                    }
                  } 
                  else 
                  {
                    swal('Cancelled', 'Your database record is sasfe!', 'error');
                  }
                };
              })(this));
            })
            
        });
        </script>
    </body>
</html>