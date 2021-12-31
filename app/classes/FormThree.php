<?php

namespace App\classes;

class FormThree
{
  public $firstNumber;
  public $lastNumber;
  public $choice;
  public $result;
  public $i;

  public function __construct($data)
  {
    $this->firstNumber  = $data["first_number"];
    $this->lastNumber   = $data["last_number"];
    $this->choice       = $data["choice"];
  }

  public function index()
  {
    if($this->firstNumber < $this->lastNumber)
    {
      if($this->choice === "Odd") {
        for($this->i = $this->firstNumber; $this->i <= $this->lastNumber; $this->i++)
        {
          if($this->i % 2 !== 0)
          {
            $this->result .= $this->i." ";
          }
        }
      }
      else
      {
        for($this->i = $this->firstNumber; $this->i <= $this->lastNumber; $this->i++)
        {
          if($this->i % 2 === 0)
          {
            $this->result .= $this->i." ";
          }
        }
      }
    }
    else if($this->firstNumber > $this->lastNumber)
    {
      if($this->choice === "Odd")
      {
        for($this->i = $this->firstNumber; $this->i >= $this->lastNumber; $this->i--)
        {
          if($this->i % 2 !== 0)
          {
            $this->result .= $this->i." ";
          }
        }
      }
      else
      {
        for($this->i = $this->firstNumber; $this->i >= $this->lastNumber; $this->i--)
        {
          if($this->i % 2 === 0)
          {
            $this->result .= $this->i." ";
          }
        }
      }
    }

    return $this->result;
  }
}
