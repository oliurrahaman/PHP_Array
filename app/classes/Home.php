<?php

namespace app\classes;
use App\classes\Software;

class Home
{
    public $message,$software,$softwares,$singleSoftware;
    public function __construct()
{

}
public function index()
{
    return view('home');
}

    public function about()
    {
        return view('about');
    }
    public function software()
    {
        $this->software = new Software();
        $this->softwares =$this->software->getAllSoftware();

        return view('software-dev',[
            'softwares'=>$this->softwares
        ]);
    }

    public function detail($id)
    {
        $this->software =new Software();
        $this->singleSoftware=$this->software->getSoftwareById($id);
        return view('detail',[

            'software'=>$this->singleSoftware
        ]);
    }

    public function primeNumber()
    {
        return view('prime-numbers');
    }
    public function login()
    {
        return view('login');
    }
    public function dashBoard()
    {
        return view('dashboard');
    }


}