<?php
  include_once('./database/user.php');
  $_SESSION['isLog'] = FALSE; 

  session_start();
  session_unset();
  session_destroy();

  
  header('Location: index.php');
?>