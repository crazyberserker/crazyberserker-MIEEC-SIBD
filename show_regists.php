<!DOCTYPE html>
<?php
require_once('./config/init.php');
include_once('./templates/header_employee.php');
include('./database/regists.php');

global $N;
$N = showRegists();

?>

 <head>
   <title> GYM NAME </title>
   <link rel="stylesheet" href="css/table.css">
</head>

<body>
<?php 
  $j=0;
  foreach ($N as $j) { 
?>
  <div class="container-table">
     
  <table>
  
    <tr>
      <th>Name</th>
      <th><?=$j['Name']?></th>
    </tr>
    <tr>
      <th>Email</th>
      <th> <?=$j['EMAIL']?></th>
    </tr>
    <tr>
      <th>Phone</th>
      <th><?=$j['PHONE']?></th>
    </tr>
    <tr>
      <th>Message</th>
      <th> <?=$j['mes']?></th>
    </tr>
      </table>
  </div>
  <?php
 }
?>
</body>
</html>
