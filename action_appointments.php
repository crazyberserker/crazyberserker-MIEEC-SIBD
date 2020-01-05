<?php

include_once('./config/init.php');
include_once('./database/appointment.php');


$username = $_POST["username"];
$password = $_POST["password"];


if (isNutriAppointment($ID ,$date, $Given_to, $Given_by, $Room, $Diabetes, $Cholesterol)){
  $_SESSION['ID'] = $ID;
  $_SESSION['date'] = $date;
  $_SESSION['Given_to'] = $Given_to;
  $_SESSION['Given_by'] = $Given_by;
  $_SESSION['Room'] = $Room;
  $_SESSION['Given_by'] = $Given_by;
  $_SESSION['Room'] = $Room;
  $_SESSION['Diabetes'] = $Diabetes;
  $_SESSION['Cholesterol'] = $Cholesterol;
  header('Location: nutrition_appointment.php');
}

if(isPhysicalAppointmen($ID, $date, $Given_to, $Given_by, $Room,))
{
    $_SESSION['ID'] = $ID;
    $_SESSION['date'] = $date;
  $_SESSION['Given_to'] = $Given_to;
  $_SESSION['Given_by'] = $Given_by;
  $_SESSION['Room'] = $Room;
  $_SESSION['Given_by'] = $Given_by;
  $_SESSION['Room'] = $Room;
  header('Location: Physical_appointment.php');
}
else
header('Location: user_page.php');



?>