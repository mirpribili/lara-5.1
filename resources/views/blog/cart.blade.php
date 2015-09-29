<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 21.09.2015
 * Time: 18:25
 */
?>
@extends('layouts.default')

@section('content')
    <h1>{{$record->title}}</h1>
    <div class="content">
        <img src="/uploads/blog/medium/{{$record->image}}" class="pull-left" />
        <p>{!! $record->body !!}</p>
    </div>

@stop()
