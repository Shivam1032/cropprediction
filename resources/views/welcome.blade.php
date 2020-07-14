<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel {{app()->getLocale()}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">{{__('Login')}}</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">{{__('Register ? New User')}}</a>
                        @endif

                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
<!-- Services section -->
<section class="jumbotron text-center">
     <div class="container">
       <h1 class="jumbotron-heading">Album example</h1>
       <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sIet, but not too short so folks don't simply skip over it entirely.</p>
       <p>
         <a href="#" class="btn btn-primary">Main call to action</a>
         <a href="#" class="btn btn-secondary">Secondary action</a>
       </p>
     </div>
</section>

	<!-- /Services section -->
            </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>

            </div>
        </div>
    </body>
</html>
