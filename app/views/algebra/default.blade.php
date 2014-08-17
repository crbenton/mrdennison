<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Mr Dennison | Algebra</title>
        @include('styles')
    </head>
    <body>
        @include('algebra.algebra-nav')

        <div class="container">
            @yield('content')
        </div>

        @include('scripts')
        @include('algebra.algebra-styles')
    </body>
</html>