<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 21.09.2015
 * Time: 17:58
 */?>
@extends('layouts.default')

@section('content')
    <h1>Список публикаций в блоге</h1>
    @foreach($records as $item)
        <div class="row">
            <div class="col-md-2">
                <img src="/uploads/blog/small/{{$item->image}}" />
            </div>
            <div class="col-md-10">
                <h2>{{$item->title}}</h2>
                <div class="content">
                    {{ str_limit($item->body, 200) }}
                </div>
                <a href="/blog/{{$item->slug}}">Читать дальше</a>
            </div>
        </div>
    @endforeach

    @include('partials.paginate', ['pager'=>$records])

@stop()