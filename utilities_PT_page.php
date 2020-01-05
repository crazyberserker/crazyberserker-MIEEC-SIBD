<!DOCTYPE html>
<?php
require_once('./config/init.php');
include_once('./templates/header_employee.php');
include('./database/user.php');
include_once('./database/Employee.php');

?>

 <head>
   <title> GYM NAME </title>
   <link rel="stylesheet" href="css/utilities.css">

</head>
<body>

      <div class="button_join1">
                <a href="show_regists.php" class="btn">Regists</a>
       </div>
      <div class="button_join2">
          <a href="physical_appointment_arrange_page.php" class="btn">Appointment Request</a>
      </div>
      <div class="button_join3">
          <a href="error_loged.php" class="btn">Build a workout plan</a>
      </div>
      <div class="button_join4">
          <a href="employee_registation.php" class="btn">Add new Employees</a>
      </div>
</body>
</html>
