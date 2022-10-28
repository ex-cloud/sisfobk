<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="../../css/app.css" rel="stylesheet">
    <link rel="icon" href="../../../../bk.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style type="text/css">
        .preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background-color: #fff;
        }
            .preloader .loading {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%,-50%);
            font: 14px arial;
        }
        </style>
	
    <title>BK SMKN 6 Bandung | {{ $title }}</title>
    </head>
    <body>
        @yield('content')
        <div class="preloader">
            <div class="text-center loading">
                <img src="../../../../DRing.svg" width="80">
                <p>Loading...</p>
                </div>
            </div>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            $(document).ready(function(){
            $(".preloader").fadeOut(2000);
            })
        </script>
        <script>
            @if (Session::has('success'))
                toastr.success('{{ Session::get('Berhasil') }}')
            @endif
            @if (Session::has('warning'))
                toastr.warning('{{ Session::get('warning') }}')
            @endif
            @if (Session::has('error'))
                toastr.error('{{ Session::get('error') }}')
            @endif
        </script>
    </body>
</html>
