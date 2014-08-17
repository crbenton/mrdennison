<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        @include('styles')
        @include('apcs.apcs-styles')
    </head>
    <body>
        @include('apcs.apcs-nav')

        <div class="container">
            @yield('content')
        </div>

        @include('scripts')

    </body>
</html>