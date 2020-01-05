
<!DOCTYPE html>
<?php
  
  include ('templates/header_employee.php');

 ?>
<html>
<head>
    <title> GYM NAME </title>
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/style2.css">
</head>
<body>
       <body>
		<div class="login">
			<h1>Rquest</h1>
			<form action="employee_appointment_request.php" method="post">
				<label for="Type">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="Type" placeholder="Type 1=Physical/2=Nutri" id="Type" required>
				<label for="date">
					<i class="fas fa-user"></i>
				</label>
				<input type="datetime-local" name="date" placeholder="date" id="date" required>
				<label for="Given_to">
					<i class="fas fa-lock"><</i>
				</label>
				<input type="select" name="Given_to" placeholder="Given_to" id="Given_to">
				<label for="Given_by">
					<i class="fas fa-lock"></i>
				</label>
				<input type="number" name="Given_by" placeholder="Given_by" id="Given_by">
				<label for="Room">
					<i class="fas fa-lock"></i>
				</label>
				<input type="text" name="Room" placeholder="Room" id="Room">
                <input type="submit" value="Arrange">
			</form>
		</div>
	</body>

</body>
</html>