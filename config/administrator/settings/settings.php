<?php
return[
    'title'=>'Настройки сайта',
    'edit_fields'=>[
        'blog_pagination'=>[
            'title' => 'Количество записей на странице в блоге', //BUG trans('administrator.blog_pagination'), https://github.com/FrozenNode/Laravel-Administrator/issues/876
            'type'  =>  'number',
        ],

        'blog_tempo'=>[
            'title' => 'tempo',
            'type'  =>  'number',
        ],

        'blog_tempo_kempo'=>[
            'title' => 'tempo_kempo',
            'type'  =>  'number',
        ],

    ],
    'rules' => [
        'blog_pagination' => 'required|numeric|min:2|max:100',
    ],
];
//'title' => trans('administrator.Blog_pagination'),