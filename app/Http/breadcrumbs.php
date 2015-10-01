<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 29.09.2015
 * Time: 14:42
 * http://laravel-breadcrumbs.davejamesmiller.com/en/latest/start.html#install-laravel-breadcrumbs
 */
// Home
Breadcrumbs::register('home', function($breadcrumbs)
{
    $breadcrumbs->push('Home', route('home'));
});
// Home > About
Breadcrumbs::register('about', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('About', route('about'));
});
// Home > LK
Breadcrumbs::register('LK', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('ЛК', route('lk.index'));
});

// Home > myInterview
Breadcrumbs::register('myInterview', function($breadcrumbs)
{
    $breadcrumbs->parent('LK');
    $breadcrumbs->push('Мои интевью', route('myInterview'));
});
// Home > myInterview > [addInterview]
Breadcrumbs::register('edithInterview', function($breadcrumbs, $myInterview)
{
    $breadcrumbs->parent('myInterview');
    $breadcrumbs->push($myInterview->id, route('edithInterview', $myInterview->id));
});
// Home > myInterview > addInterview
Breadcrumbs::register('addInterview', function($breadcrumbs)
{
    $breadcrumbs->parent('myInterview');
    $breadcrumbs->push('Добавить интервью', route('addInterview'));
});