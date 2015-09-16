<?php
return [
    'title'     =>'Slides',
    'single'    =>'slide',
    'model'     =>'App\Slider',
    'columns'   =>[
        'id',
        'active',
        'image'=>[
            'output'    =>'<img src="/uploads/slider/small/(:value)" />',
            //'output'    =>'<img src="'.asset('/uploads/slider/small/(:value)'.'" />'),
            //'output'    =>'<img src="http://laraii.5/uploads/slider/small/(:value)" />',
        ],
    ],
    'edit_fields' =>[
        'active'=>[
            'type'      =>'bool',
        ],
        'weight'=>[
            'type'      =>'number',
        ],
        'image'=>[
            'type'      =>'image',
            'location'  =>public_path().'/uploads/slides/original/',
            'sizes'     =>[
                [100, 100,'auto',public_path().'/uploads/slides/small/',100],
                [1000,500,'auto',public_path().'/uploads/slides/large/',100],
            ],
        ]
    ]

];




