@extends('layouts.default')

@section('content')
    <h1>О нас</h1>
    <div class="row">
        <div class="col-md-6">
            {!! $about->content !!}
        </div>
        <div class="col-md-6">
            <img src="/uploads/{{$about->image}}" />
        </div>
    </div>
@stop()