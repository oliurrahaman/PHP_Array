<?php

namespace app\classes;

class User
{
    public $users;
    public function __construct()
    {
        $this->users=[
            0=>[
                'id'=>1,
                'name'=>'Oliur Rahaman',
                'user_name'=>'oliur',
                'password'=>'123456',
            ],
            1=>[
                'id'=>2,
                'name'=>'Habibur Rahaman',
                'user_name'=>'habib',
                'password'=>'112233',
            ],
            2=>[
                'id'=>1,
                'name'=>'Sany Chowdhury',
                'user_name'=>'sany',
                'password'=>'111333',
            ],
        ];
    }
    public function getAllUsers()
    {
        return $this->users;

    }

}