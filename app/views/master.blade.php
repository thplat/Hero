<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">	
        <link rel="stylesheet" href="//bootswatch.com/flatly/bootstrap.min.css">	
        {{ HTML::style('css/style.css') }}	
        </head>
    <body>

        @include('partials.menu')

        <div class="container">
            @yield('content')
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    </body>
</html>