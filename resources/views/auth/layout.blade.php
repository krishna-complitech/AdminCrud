<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>login</title>
    <link rel="stylesheet" href="{{ URL::asset('css/login.css') }}">
  </head>

<body>
    <div class="wrapper">
        <div class="container">    
            @yield('content')
        </div>
    </div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="{{ URL::asset('js/login.js') }}"></script>
 </body>
</html>    