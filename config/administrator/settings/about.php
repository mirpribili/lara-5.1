<?php
// все данные будут сохраняться json не в БД
return[
    'title'=>'About page',
    'edit_fields'=>[
        'content'=>[
            'type'=>'textarea',
        ],
        'image'=>[
            'type'=>'image',
            'location'=>public_path().'/uploads/',
        ],
    ],
];