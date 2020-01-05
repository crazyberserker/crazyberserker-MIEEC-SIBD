<?php
 
 include_once('./config/init.php');
 include_once('./database/regists.php');
  
 
  $Name = $_POST['Name'];
  $EMAIL = $_POST['EMAIL'];
  $PHONE = $_POST['PHONE'];
  $mes = $_POST['mes'];
 
  if (createRegist($Name , $EMAIL, $PHONE, $mes))
  {
    $_SESSION['Name'] = $Name;
    $_SESSION['EMAIL'] = $EMAIL;
    $_SESSION['PHONE'] = $PHONE;
    $_SESSION['mes'] = $mes;

    header('Location: index.php');
  }
  else
    header('Location: error.php');
 
?>