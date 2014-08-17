@extends('apcs.default')

@section('content')

<style>
    #firstColumn > button{
        width: 100%;
    }
</style>
    <div class="row">
        <div id="firstColumn" class = "pull-left col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <button class="btn btn-primary">Syllabus</button>
        </div>

        <div id="secondColumn" class = "pull-right col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <button class="btn btn-primary">Syllabus</button>
        </div>
    </div>

@stop