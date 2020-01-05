<?php
 
 include_once('./config/init.php');
 include_once('./database/user.php');
 include_once('./database/Employee.php');
 
 $username = $_POST["username"];
 $password = $_POST["password"];
 $First_name = $_POST["First_name"];
 $Last_name = $_POST["Last_name"];
 $Sex = $_POST['Sex'];
 $Adress = $_POST['Adress'];
 $Phone_number = $_POST['Phone_number'];
 $Age = $_POST['Age'];
 $Start_date = $_POST['Start_date'];
 $Languages = $_POST['Languages'];
 $Position = $_POST['Position'];
 $Degree = $_POST['Degree'];
 $Experience = $_POST['Experience'];

 if(createUser($username, $password, $First_name, $Last_name, $Sex ,$Adress, $Phone_number, $Age))
 {
   $_SESSION['username'] = $username;
   $_SESSION['password'] = $password;
   $_SESSION['First_name'] = $First_name;
   $_SESSION['Last_name'] = $Last_name;
   $_SESSION['Sex'] = $Sex;
   $_SESSION['Adress'] = $Adress;
   $_SESSION['Phone_number'] = $Phone_number;
   $_SESSION['Age'] = $Age;
}
$ID_EMPLOYEE = user_getID($username, $password);

if(createUser_Employee($ID_EMPLOYEE, $Start_date, $Languages, $Position, $Degree, $Experience))
{
   $_SESSION['Start_date'] = $Start_date;
    $_SESSION['Languages'] = $Languages;
     $_SESSION['Position'] = $Position;
     $_SESSION['Degree'] = $Degree;
     $_SESSION['Experience'] = $Experience;
     header('Location: utilities_PT_page.php');
}

   else
   header('Location: error.php');
?>