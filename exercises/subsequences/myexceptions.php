<?php 
namespace MyExceptions;

class Required extends \Exception
{
    protected $message = "Please submit required data!";
}


class ValidateDataInputs extends \Exception
{
    protected $message = "All inputs must be whole positive integers!";
}


class ValidateInputs extends \Exception
{
    protected $message = "A, B, and C must be between 1 and 1000000!";
}


class ValidateInputA extends \Exception
{
    protected $message = "Input (A) must be less than or equal to (B)!";
}


?>