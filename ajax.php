<?php
include 'config.php';
$setupResult = "No pin setup";
$updateResult = "Nothing Updated";
//Makes sure the pins are porperly configured before working with them

if (isset($_GET["button1Pushed"]))//Controls pin 17
{
  //Sets the pin to an output
  $setupResult = shell_exec("gpio -g mode ".$pin1." out");
  if ($_GET["button1Pushed"] == 1) // $pin1 off
  {
    echo "Turning off ".$pin1." AKA pin1";
    $updateResult = shell_exec("gpio -g write ".$pin1." 0");
  }
  else if ($_GET["button1Pushed"] == 2) // $pin1 On
  {
    echo "Turning on ".$pin1." AKA pin1";
    $updateResult = shell_exec("gpio -g write ".$pin1." 1");
  }
}

if (isset($_GET["button2Pushed"]))//Controls pin 27
{
  $setupResult = shell_exec("/usr/local/bin/gpio -g mode ".$pin2." out");
  if ($_GET["button2Pushed"] == 1) // $pin2 off
  {
    echo "Turning off ".$pin2." AKA pin2";
    $updateResult = shell_exec("gpio -g write ".$pin2." 0");
  }
  else if ($_GET["button2Pushed"] == 2) // $pin2  On
  {
    echo "Turning on ".$pin2." AKA pin2";
    $updateResult = shell_exec("gpio -g write ".$pin2." 1");
  }
}

if (isset($_GET["button3Pushed"]))//Controls pin 23
{
  $setupResult = shell_exec("gpio -g mode ".$pin3." out");
  if ($_GET["button3Pushed"] == 1) //$pin3 off
  {
    echo "Turning off ".$pin3." AKA pin3";
    $updateResult = shell_exec("gpio -g write ".$pin3." 0");
  }
  else if ($_GET["button3Pushed"] == 2) // $pin3 On
  {
    echo "Turning on ".$pin3." AKA pin3";
    $updateResult = shell_exec("gpio -g write ".$pin3." 1");
  }
}

if (isset($_GET["button4Pushed"]))//Controls pin 22
{
  $setupResult = shell_exec("gpio -g mode ".$pin4." out");
  if ($_GET["button4Pushed"] == 1) // $pin4 off
  {
    echo "Turning off ".$pin4." AKA pin4";
    $updateResult = shell_exec("gpio -g write ".$pin4." 0");
  }
  else if ($_GET["button4Pushed"] == 2) // $pin4 On
  {
    echo "Turning on ".$pin4." AKA pin4";
    $updateResult = shell_exec("gpio -g write ".$pin4." 1");
  }
}
echo "</br>";
echo $setupResult;
echo "</br>";
echo "</br>";
echo $updateResult;
?>
