<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 24.09.2015
 * Time: 17:48
 */?>

@extends('layouts.default')

@section('content')
    <h1>{{$new->title}}</h1>
    <div class="content">
        {{--https://github.com/LaravelRUS/localized-carbon/blob/master/docs/README-ru.md#installation --}}
        <p>{{  \LocalizedCarbon::parse($new->published_at)->diffForHumans()  }}</p>
        <img src="/uploads/press/medium/{{$new->image}}" class="pull-left" />
        <p>{!! $new->body !!}</p>
    </div>

@stop()

