
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
			<h1>Regist</h1>
			<form action="action_utilities.php" method="post">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Username" id="username" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
                <label for="First_name">
					<i class="fas fa-lock"></i>
				</label>
				<input type="text" name="First_name" placeholder="First_name" id="First_name" required>
				<label for="Last_name">
					<i class="fas fa-lock"></i>
				</label>
				<input type="text" name="Last_name" placeholder="Last_name" id="Last_name" required>
				<label for="Sex">
					<i class="fas fa-lock"></i>
				</label>
				<input type="text" name="Sex" placeholder="Sex" id="Sex" required>
				<label for="Adress">
					<i class="fas fa-lock"></i>
				</label>
				<input type="text" name="Adress" placeholder="Adress" id="Adress" required>
                <label for="Phone_number">
					<i class="fas fa-lock"></i>
				</label>
				<input type="integer" name="Phone_number" placeholder="Phone_number" id="Phone_number" required>
                <label for="Age">
					<i class="fas fa-lock"></i>
				</label>
				<input type="integer" name="Age" placeholder="Age" id="Age" required>
                <label for="Start_date">
					<i class="fas fa-lock"></i>
				</label>
				<input type="date" name="Start_date" placeholder="Start date" id="Start_date" required>
				<label for="Languages">
					<i class="fas fa-lock"></i>
				</label>
				<input type="text" name="Languages" placeholder="Languages" id="Languages" required>
				<label for="Position">
					<i class="fas fa-lock"></i>
				</label>
				<input type="text" name="Position" placeholder="Position" id="Position" required>
				<label for="Position">
					<i class="fas fa-lock"></i>
				</label>
				<input type="text" name="Degree" placeholder="Degree" id="Degree" required>
				<label for="Experience">
					<i class="fas fa-lock"></i>
				</label>
				<input type="text" name="Experience" placeholder="Experience" id="Experience" required>
                <input type="submit" value="Regist">
			</form>
		</div>
	</body>

</body>
</html>