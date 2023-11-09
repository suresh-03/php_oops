<?php

declare(strict_types=1);
class calculator
{
    public int $firstNumber;
    public int $secondNumber;
    public string $operation;

    public function __construct(string $op,int $fn,int $sn)
    {
        $this->firstNumber = $fn;
        $this->operation = $op;
        $this->secondNumber = $sn;
    }

    public function calculate(){
        switch($this->operation){
            case "add":
                return $this->firstNumber + $this->secondNumber;
                break;
            case "sub":
                return $this->firstNumber - $this->secondNumber;
                break;
            case "mul":
                return $this->firstNumber * $this->secondNumber;
                break;
            case "div":
                return $this->firstNumber / $this->secondNumber;
                break;
            default:
                echo "error";

        }
    }
    
}
