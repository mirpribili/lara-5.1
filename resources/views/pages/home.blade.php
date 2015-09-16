@extends('layouts.default')

@section('content')


    @allowed ('users.crud')
        <div><a href="admin/user">админка по модели user</a> </div>
    @endallowed


    @if(Auth::check())
        <div><a href="auth/logout">Exit from site</a> </div>
    @else
        <div><a href="auth/login">Enter to site</a> </div>
    @endif

<?
echo '<img src="'.asset('/uploads/slides/small/r835lAdPHjLOiGEYL4IQT61ejGlXpWyj.png').'">';
?>
    <img src="http://laraii.5/uploads/slides/small/r835lAdPHjLOiGEYL4IQT61ejGlXpWyj.png">

    {{--
    <div>Исчезающая(в portable FF40.0.3) иконка в ряду</div>

    <p style='font-size:10em;'>
        <i class="glyphicon glyphicon-fire fa-spin"></i>
        <i class="fa fa-genderless fa-spin"></i>
        <i class="fa fa-houzz fa-spin"></i>
        <i class="fa fa-child"></i>
        <i class="fa fa-birthday-cake"></i>
        <i class="fa fa-transgender-alt fa-spin"></i>
    </p>
    --}}
@stop()