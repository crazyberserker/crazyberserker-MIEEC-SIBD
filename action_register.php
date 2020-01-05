<?php

  include_once('./config/init.php');
  include_once('./database/user.php');
  
  $username = $_POST["username"];
  $password = $_POST["password"];
  $First_name = $_POST["First_name"];
  $Last_name = $_POST["Last_name"];
  $Sex = $_POST['Sex'];
  $Adress = $_POST['Adress'];
  $Phone_number= $_POST['Phone_number'];
  $Age = $_POST['Age'];


  if (createUser($username, $password, $First_name, $Last_name, $Sex ,$Adress, $Phone_number, $Age)){
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    $_SESSION['First_name'] = $First_name;
    $_SESSION['Last_name'] = $Last_name;
    $_SESSION['Sex'] = $Sex;
    $_SESSION['Adress'] = $Adress;
    $_SESSION['Phone_number'] = $Phone_number;
    $_SESSION['Age'] = $Age;
    header('Location: user_page.php');
  }
  else
  header('Location: error.php');
 

?>

