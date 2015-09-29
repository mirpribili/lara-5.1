<?php
return [
    'title'     =>'Польз-ли',
    'single'    =>'польз-ля',
    'model'     =>'App\User',
    'columns'   =>[
        'id',
        'email',
    ],
    'edit_fields' =>[
        'email'=>[
            'type'=>'text',
        ]
    ],
    // administrator.frozennode.com/docs/validation
    'rules' => [
        'email' => 'required|email',
    ],
    // Custom Messages
    // administrator.frozennode.com/docs/validation#custom-messages
    /*
    'messages' => [
        'email' => '<p style="color:red">Поле E-mail заполнено с нарушением в формате записи</p>',
    ],
    */

];