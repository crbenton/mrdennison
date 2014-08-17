<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Document</title>
    @include('styles')

</head>
<body>
@include('lam.lam-nav')

<div class="container">
    @yield('content')
</div>

@include('scripts')
</body>
</html>