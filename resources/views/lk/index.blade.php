<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 28.09.2015
 * Time: 14:12
 */?>
@extends('layouts.default')

@section('content')
    {!! Breadcrumbs::render('LK') !!}

    <h1>Личный кабинет</h1>
    <div class="container-fluid">
        {{--lg md sm xs--}}
        <div class="row">
            <div class="col-xs-2">
                <p><a href="#">Новости</a></p>
                <p><a href="{{route('myInterview')}}">! Мои интервью</a></p>
                <p><a href="#">Пригласить</a></p>
                <p><a href="#">Кошелек</a></p>
                <p><a href="#">Мои данные</a></p>
                <p><a href="#">Настройки</a></p>
                <p><a href="#">Связь</a></p>
                <p><a href="#">Сообщения</a></p>
            </div>
            <div class="col-xs-6">
                <div class="content">
                    <pre>
                        переброс в лк

                        AuthController
                        ///////////////////////
                        public function __construct()
                        {
                        $redirectTo=redirect()->route('home');

                        $this->middleware('guest', ['except' => 'getLogout']);
                        }
                        ------------------
                        administrator
                        //////////////////
                        return ( Auth::check() )?Auth::user()->allowed('users.crud'):false;
                        -------------------
                    </pre>


                </div>
            </div>
            <div class="col-xs-4">
                <p>Реклама</p>
            </div>
        </div>
    </div>

@stop()
