@extends('layouts.front')

@section('banner')
    <div class="jumbotron">
        <div class="container">
            <h1>Kepler forum</h1>
            <p>Stack.Com</p>
            <p>
                <a class="btn btn-primary btn-lg">Kepler</a>
            </p>
        </div>
    </div>
@endsection
@section('heading',"Threads")
@section('content')
    {{--@include('thread.partials.thread-list')--}}
@endsection