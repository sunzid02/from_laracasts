<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', 'Laracasts')</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.0/css/bulma.css"/>

        <style>
            .is-complete{
                text-decoration: line-through;
            }
        </style>

    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>