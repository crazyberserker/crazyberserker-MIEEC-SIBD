<?php
  include_once('./config/init.php');
  include_once('./database/user.php');
  
  $username = $_POST['username'];
  $password = $_POST['password'];
  
  if (isValid($username, $password))
  {
    $_SESSION['success_message'] = 'Login successful!';
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    $_SESSION['isLog'] = TRUE;
    
    
    if(isEmployee($username))
      header('Location: main_employee_page.php');
    else
    header('Location: user_page.php');
  }
  else
   header('Location: error.php');
 
?>