<?php


namespace App\classes;
use App\classes\User;


class Auth
{
    public $userName,$password,$user,$users;
    public function login($post)
    {
        $this->userName=$post['user_name'];
        $this->password=$post['password'];

        $this->user = new User();
        $this->users= $this->user->getAllUsers();


        foreach ($this->users as $user) {
            if($user['user_name']==$this->userName && $user['password']==$this->password)
            {
                header('Location: action.php?page=dashboard');
                exit();
            }
            header('Location: action.php?page=login&&message=Sorry..invalid credentail..');
        }


    }

}