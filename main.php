// release 0.1.0
<?php

function printMessage($name)
{
   echo "Hello ".$name.", How are you";

}


function addName()
{
  $name = "John";
  printMessage($name);
}

addName();

?>

