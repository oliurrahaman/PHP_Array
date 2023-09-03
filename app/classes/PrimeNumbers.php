<?php

namespace app\classes;

class PrimeNumbers
{
    public $firstNumber,$lastNumber,$i,$MyNum,$n,$result;
    public function __construct($post)
    {


        $this->firstNumber= $post['first_number'];
        $this->lastNumber= $post['last_number'];

    }


    public function getPrimeNum($MyNum)
    {

        $n = 0;
        if ($MyNum == 2 || $MyNum == 3) {
            echo $MyNum . " ";
        } elseif ($MyNum % 6 == 1 || $MyNum % 6 == 5) {
            for ($i = 2; $i * $i <= $MyNum; $i++) {
                if ($MyNum % $i == 0) {
                    $n++;
                    break;
                }
            }

            if ($n == 0) {
                echo $MyNum . " ";
            }
        }
    }
    public function index(){




        $x = $this->firstNumber;
        $y = $this->lastNumber;

        for($i = $x; $i < $y + 1; $i++) {
        $this->result = $this->getPrimeNum($i);

        }
        header('Location:action.php?page=prime-numbers&&result='.$this->result);

    }


    }







