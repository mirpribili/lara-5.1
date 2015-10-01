<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 28.09.2015
 * Time: 17:19
 */?>

@extends('layouts.default')

@section('content')
    {!! Breadcrumbs::render('myInterview') !!}
    <hr>
    @if(isset($interviews))
        @foreach($interviews as $interview)
            <p>{{  \LocalizedCarbon::parse($interview->created_at)->diffForHumans()  }}</p>
            <p>{{$interview->body}}</p>
            <p><a href="{{route('edithInterview',$interview->id)}}">Редактировать</a></p>
            <hr>
        @endforeach
    @else <p>интервью у вас пока нет</p>
    @endif
    <p><a href="{{route('addInterview')}}">Разместить интервью</a></p>

@stop()