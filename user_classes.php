<!DOCTYPE html>
<?php
require_once('./config/init.php');
include_once('./database/classes.php');
include_once('./templates/header_user.php');

global $P;
$P = getAllClasses();

?>
<head>
    <title> GYM NAME </title>
    <link rel="stylesheet" href="./css/time_table.css">
</head>
<body>
  <div class="classedata">
  <body>
<?php 
  $i=0;
  foreach ($P as $i) { 
?>
  <div class="class">
     
  <table>
      <tr>
            <th>Name</th>
            <td><?=$i['Name']?></td>
        </tr>
      <tr>  
            <th>Day</th>
            <td><?=$i['Day']?></td>
      </tr>
      <tr>
            <th>Duration</th>
            <td><?=$i['Duration']?></td>
       <tr>     
            <th>Start_hour</th>
             <td><?=$i['Start_hour']?></td>
       </tr>
       <tr>     
            <th>Room</th>
             <td><?=$i['Where']?></td>
       </tr>
   </table>
  </div>
  <?php }
?>

  </div>
  <title> GYM NAME | Classes </title>
  <link rel="stylesheet" href="css/time_table.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <h1> Classes Schedule </h1>
  <div class="border"></div>
  <table>
    <tr>
      <th> Time </th>
      <th> Monday </th>
      <th> Tuesday </th>
      <th> Wednesday </th>
      <th> Thursday </th>
      <th> Friday </th>
      <th> Saturday </th>
      <th> Sunday </th>
    </tr>
    <tr>
      <th> 8:00 </th>
      <td></td>
      <td> </td>
      <td></td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
    </tr>
    <tr>
      <th> 9:00 </th>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
    </tr>
    <tr>
      <th> 10:00 </th>
      <td></td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
    </tr>
    <tr>
      <th> 11:00 </th>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
    </tr>
    <tr>
      <th> 12:00 </th>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
    </tr>
    <tr>
      <th> 13:00 </th>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
    </tr>
    <tr>
      <th> 14:00 </th>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
    </tr>
    <tr>
      <th> 15:00 </th>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
    </tr>
    <tr>
      <th> 16:00 </th>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
    </tr>
    <tr>
      <th> 17:00 </th>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
    </tr>
    <tr>
      <th> 18:00 </th>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
    </tr>
    <tr>
      <th> 19:00 </th>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
    </tr>
    <tr>
      <th> 20:00 </th>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
    </tr>
    <tr>
      <th> 21:00 </th>
      <td>asdasdas </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
    </tr>
    <tr>
      <th> 22:00 </th>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
    </tr>

  </table>

</body>
</html>
