<?php

namespace app\classes;

class Software
{
    public $softwares=[],$result=[];
    public function __construct()
    {
        $this->softwares=[
            0=>[
                'id'         =>1,
                'name'       =>'PHP with Laravel',
                'price'      => 25000,
                'description'=>'PHP with Laravel description',
                'image'      =>'assets/img/sd-7.jpg',
            ],
            1=>[
                'id'          =>2,
                'name'       =>'Python',
                'price'      => 10000,
                'description'=>'Python description',
                'image'      =>'assets/img/sd-1.jpg',
            ],
            2=>[
                'id'          =>3,
                'name'       =>'.Net Framework',
                'price'      => 15000,
                'description'=>'.net Framework description',
                'image'      =>'assets/img/sd-3.jpg',
            ],
            3=>[
                'id'          =>4,
                'name'       =>'Java',
                'price'      => 45000,
                'description'=>' Description',
                'image'      =>'assets/img/sd-5.png',
            ],
            4=>[
                'id'          =>5,
                'name'       =>'C++',
                'price'      => 35000,
                'description'=>' Description',
                'image'      =>'assets/img/sd-6.png',
            ]



        ];
    }
    public function getAllSoftware()
    {
        return $this->softwares;
    }


    public  function  getSoftwareById($id)
    {
        foreach ($this->softwares as $software)
        {
            if($software['id']==$id)
            {
                return $software;
            }
        }

    }

}