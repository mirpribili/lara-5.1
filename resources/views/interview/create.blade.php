<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 28.09.2015
 * Time: 17:52
 */?>

@extends('layouts.default')

@section('content')
    @if(isset($interview))
        {!! Breadcrumbs::render('edithInterview', $interview) !!}
    @else
        {!! Breadcrumbs::render('addInterview') !!}
    @endif

    <hr>
    <form method="POST" action="<?=route('storeInterview')?>" enctype="multipart/form-data" accept-charset="UTF-8">

        <p><textarea  name="body"  rows="10" cols="30"      placeholder="Текст интервью" >{{ (isset($interview))?$interview->body:old('body') }}</textarea></p>

        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
        <p><input type="submit" value="Отправить"></p>

    </form>


    @if (count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    @if (session('success'))
        {{session('success')}}
    @endif

@stop()