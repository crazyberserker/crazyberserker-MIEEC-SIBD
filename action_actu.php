<?php
  include_once('./config/init.php');
  include_once('./database/user.php');
  
  $user = $_SESSION['reg'];
  $username = $user['username'];

  $First_name = $_POST["First_name"];
  $Last_name = $_POST["Last_name"];
  $Adress = $_POST['Adress'];
  $Phone_number= $_POST['Phone_number'];
  $Age = $_POST['Age'];
  $Email= $_POST['Email'];
  $Health_insurance_number = $_POST['Health_insurance_number'];
  $Intolerance = $_POST['Intolerance'];
  $Allergies = $_POST['Allergies'];
 

  if(changeFirst_name($First_name, $username)
  || changeLast_name($Last_name, $username)
  || changeAdress($Adress, $username)
  || changePhone_number($Phone_number, $username)
  || changeAge($Age, $username)
  || changeEmail($Email, $username)
  || changeHealth_insurance_number($Health_insurance_number, $username)
  || changeIntolerance($Intolerance, $username)
  || changeAllergies ($Allergies , $username))
  header('Location: personal_profile.png');

  else 
  header('Location: user_page.php');
 
?>

   
