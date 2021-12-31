<?php

namespace App\classes;

class FormFour
{
  public $firstNumber;
  public $lastNumber;
  public $result = 0;
  public $i;

  public function __construct($data)
  {
    $this->firstNumber  = $data["first_number"];
    $this->lastNumber   = $data["last_number"];
  }

  public function index()
  {
    if($this->firstNumber < $this->lastNumber)
    {
      for($this->i = $this->firstNumber; $this->i <= $this->lastNumber; $this->i++)
      {
        $this->result += $this->i;
      }
    }
    else
    {
      for($this->i = $this->firstNumber; $this->i >= $this->lastNumber; $this->i--)
      {
        $this->result += $this->i;
      }
    }

    return $this->result;
  }
}
