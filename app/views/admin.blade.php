<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">    
        <link rel="stylesheet" href="//bootswatch.com/flatly/bootstrap.min.css">    
        {{ HTML::style('css/style.css') }}  
        </head>
    <body>
        
        @include('partials.menu')

        <div class="left-wrapper">
            <div class="sidebar-wrapper">
                <ul class="nav nav-pills nav-stacked padded-sidemenu">
                    <li class="active" id="list-parent-post">
                        <a href="#" data-toggle="collapse" data-target="#list-child-post">
                            <span class="glyphicon glyphicon-list-alt"></span>Posts
                        </a>

                        <ul class="nav nav-pills nav-stacked collapse" id="list-child-post">
                            <li><a href="#"><span class="glyphicon glyphicon-plus"></span>New Post</a></li>
                        </ul>                        
                    </li>

                    <li id="list-parent-stats">
                        <a href="#">
                            <span class="glyphicon glyphicon-stats"> Stats
                        </a>
                    </li>
                </ul>                
            </div>
            <div class="page-content-wrapper">            
                @yield('content')
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    </body>
</html>