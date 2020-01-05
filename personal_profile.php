<!DOCTYPE html>
<?php
require_once('./config/init.php');
include_once('./templates/header_user.php');
include('./database/user.php');
include('./database/Associate.php');

$user= $_SESSION['reg'];
$username=$user['username'];
$password=$user['password'];

//var_dump($user);
?>

 <head>
   <title> GYM NAME </title>
   <link rel="stylesheet" href="css/table.css">
</head>

<body>
   <div classe="person">
     <h1> Personal Information </h1>
   </div>
<div class="main">
      <div class="container-table">
         <div  class="table-body"> 
		     <table>
                
	   	   <tbody> 
                  <tr id="row1">
                  <th>UserName</th>
                  <th><?=$user['username']?></th>
               </tr> 
               <tr classe="row2">
                  <th>First Name</th>
                  <th><?=$user['First_name']?></th>
               </tr> 
               <tr classe="row">
                   <th >Last Name</th>
                   <th><?=$user['Last_name']?></th>
               </tr> 
               <tr classe="row">
                  <th>Sex</th>
                  <th><?=$user['Sex']?></th>
               </tr> 
               <tr classe="row"> 
                  <th>Health insurance number </th>
                  <th><?=$user['Health_insurance_number']?></th>
               </tr> 
               <tr classe="row">
                  <th>Birthday</th>
                  <th><?=$user['Birthday']?></th>
               </tr> 
               <tr classe="row">
                <th>Adress</th>
                <th><?=$user['Adress']?></th>
               </tr> 
               <tr classe="row">
                <th>Phone number</th>
                  <th><?=$user['Phone_number']?></th>
               </tr>
               <tr classe="row">
                  <th>Email</th>
                  <th><?=$user['Email']?></th>
               </tr>
               <tr classe="row">
                  <th>Age</th>
                  <th><?=$user['Age']?></th>
               </tr>
               <tr classe="row">
                  <th>Intolerance</th>
                  <th><?=$user['Intolerance']?></th>
               </tr>
               <tr classe="row">
                  <th>Allergies</th>
                  <th><?=$user['Allergies']?></th>
               </tr>
               <tr>
                  <th>Nutrition Plan</th>
                  <th><?=$user['Nutrition_Plan']?></th>
               </tr>
            <?php 
                global $a;
                $a=$user['ID'];
                $user =associated($a);

            ?>
            <tr>
                  <th>N_associate</th>
                  <th><?=$user['N_associate']?></th>
               </tr>
               <tr>
                  <th>Height</th>
                  <th><?=$user['Height']?></th>
               </tr>
               <tr>
                  <th>Wheight</th>
                  <th><?=$user['Weight']?></th>
               </tr>
               <tr>
                  <th>Pack Plan</th>
                  <th><?=$user['Pack_plan']?></th>
               </tr>
          
            </tbody>
           </table>
         </div>
      </div>
</div> 
      <div class="button_join1">
                <a href="actu.php" class="btn">Change Information</a>
       </div>
      <div class="button_join2">
          <a href="pag_pass_change.php" class="btn">Change Password</a>
      </div>

</body>
</html>
