<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 24.09.2015
 * Time: 17:43
 */?>

@extends('layouts.default')

@section('content')
    <h1>Список новостей</h1>
    @foreach($presses as $item)
        <div class="row">
            <div class="col-md-2">
                <img src="/uploads/press/small/{{$item->image}}" />
            </div>
            <div class="col-md-10">
                <h2>{{$item->title}}</h2>
                <div class="content">
                    {!! str_limit($item->body, 200) !!}
                </div>
                <a href="/press/{{$item->slug}}">Читать дальше</a>
            </div>
        </div>
    @endforeach

@stop()
