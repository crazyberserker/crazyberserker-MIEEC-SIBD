<!DOCTYPE html>
<?php

include ('templates/header_employee.php');
require_once('./config/init.php');
include_once('./database/appointment.php');

//var_dump($user);

global $P;
$P = isNutriAppointment(getAllAppointments());
//var_dump($P);

  ?>
 <head>
 <link rel="stylesheet" href="css/table2.css">
 
 </head>
  <body>    <h1>Nutrition appointment</h1>
<?php 
  $i=0;
  foreach ($P as $i) { 
?>
  <div class="container-table">
     
  <table>
  
    <tr>
      <th>DATE</th>
      <th>  <?=$i['Date']?></th>
    </tr>
    <tr>
      <th>Given To</th>
      <th> <?=$i['Given_to']?></th>
    </tr>
    <tr>
      <th>Given By</th>
      <th> <?=$i['Given_by']?></th>
    </tr>
    <tr>
      <th>Room</th>
      <th> <?=$i['Room']?></th>
    </tr>
      </table>
  </div>
  <?php
 }
?>
  
</body>
</html>