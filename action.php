<?php
require_once "vendor/autoload.php";
use App\classes\Home;
use App\classes\PrimeNumbers;
use App\classes\Auth;

$home =new Home();





if(isset($_GET['page']))
{
if($_GET['page']=='home')
{
$home->index();
}
elseif ($_GET['page']=='about')
{
    $home->about();
}
elseif ($_GET['page']=='software-dev')
{
    $home->software();
}
elseif ($_GET['page']=='prime-numbers')
{
    $home->primeNumber($_POST);
}
elseif ($_GET['page'] == 'detail')
{
    $home->detail($_GET['id']);
}
elseif ($_GET['page']=='login')
{
    $home->login();
}
elseif ($_GET['page']=='dashboard')
{
    $home->dashBoard();
}
}
elseif (isset($_POST['btn_prime']))
{

    $primeNum = new PrimeNumbers($_POST);
    $primeNum->index();
}
elseif (isset($_POST['login_btn']))
{
    $auth = new Auth();
    $auth->login($_POST);
}