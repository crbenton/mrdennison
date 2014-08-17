@extends('layouts.default')

@section('content')

    <div class="container" id="splashContainer">

    <!--        AP Computer Science Entry -->
        {{HTML::linkRoute('apcs', 'AP Computer Science' ,null, ['class'=>'splashLinks btn btn-success'])}}
    <!--    Algebra Entry    -->
        {{HTML::linkRoute('algebra', 'Algebra' ,null, ['class'=>'splashLinks btn btn-danger'])}}
    <!-- OOP Entry   -->
        {{HTML::linkRoute('oop', 'Object Oriented Programming' ,null, ['class'=>'splashLinks btn btn-primary'])}}
    <!--  Liberal Arts Math Entry      -->
        {{HTML::linkRoute('lam', 'Liberal Arts Math', null, ['class' => 'splashLinks btn btn-warning'])}}
	</div>
@stop