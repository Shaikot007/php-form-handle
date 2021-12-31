<?php

require_once "../vendor/autoload.php";

use App\classes\FormOne;
use App\classes\FormTwo;
use App\classes\FormThree;
use App\classes\FormFour;
use App\classes\FormFive;

if(isset($_POST["button_one"]))
{
  $formOne = new FormOne($_POST);
  $result = $formOne->index();
  include "home.php";
}
else if(isset($_POST["button_two"]))
{
  $formTwo = new FormTwo($_POST);
  $result = $formTwo->index();
  include "form-two.php";
}
else if(isset($_POST["button_three"]))
{
  $formThree = new FormThree($_POST);
  $result = $formThree->index();
  include "form-three.php";
}
else if(isset($_POST["button_four"]))
{
  $formFour = new FormFour($_POST);
  $result = $formFour->index();
  include "form-four.php";
}
else if(isset($_POST["button_five"]))
{
  $formFive = new FormFive($_POST);
  $result = $formFive->index();
  include "form-five.php";
}
else {
  header("Location: home.php");
}
