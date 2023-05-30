<?php 
namespace ClassSubsequences;
require_once __DIR__ . "/myexceptions.php";
use MyExceptions\Required;
use MyExceptions\ValidateDataInputs;
use MyExceptions\ValidateInputA;
use MyExceptions\ValidateInputs;


class TheSubsequences 
{
    private $a;
    private $b;
    private $c;

    public function checkRequestMethod() {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            header('HTTP/1.1 405 Method Not Allowed');
            exit('Only POST requests are allowed');
        }
    }
    
    public function required($a, $b, $c) : void
    {
            $this->a = $a;
            $this->b = $b;
            $this->c = $c;

            if(empty($this->a) || empty($this->b) || empty($this->c)){
                throw new Required();
            }
    }

    public function validateDataInputs($a, $b, $c) : void
    {
         $this->a = $a;
         $this->b = $b;
         $this->c = $c;

        if (!preg_match('/^\d+$/', $this->a) || !preg_match('/^\d+$/', $this->b) || !preg_match('/^\d+$/', $this->c)) {
            throw new ValidateDataInputs();
        }
    }



    public function validateA(int $a, int $b) : void
    {
        $this->a = $a;
        $this->b = $b;

        if($this->a > $this->b){
            throw new ValidateInputA();
        }
    }

    public function validateInputs($a, $b, $c) : void
    {
         $a = $this->a = $a;
         $b = $this->b = $b;
         $c = $this->c = $c;

       if ($this->a < 1 || $this->a > 1000000 || $this->b < 1 || $this->b > 1000000 || $this->c  < 1 || $this->c > 1000000) {
        throw new ValidateInputs();
    }
    
    }

    public function count(int $a, int $b, int $c): int
        {
           $a = $this->a = $a;
           $b = $this->b = $b;
           $c = $this->c = $c;

            $cDigits = [];
            while ($c > 0) 
            {
                $cDigits[] = $c % 10;
                $c = (int)($c / 10);
            }
            $cDigits = array_reverse($cDigits);

            $count = 0;

            for ($i = $this->a; $i <= $this->b; $i++) 
            {
                $xDigits = [];
                $x = $i;
                while ($x > 0) 
                {
                    $xDigits[] = $x % 10;
                    $x = (int)($x / 10);
                }
                
                $xDigits = array_reverse($xDigits);

                $cIndex = 0;
                foreach ($xDigits as $xDigit) 
                {
                    if ($xDigit === $cDigits[$cIndex]) {
                        $cIndex++;
                        if ($cIndex === count($cDigits)) {
                            $count++;
                            break;
                        }
                    }
                }
            }

            return $count;
        }
 
}
?>
