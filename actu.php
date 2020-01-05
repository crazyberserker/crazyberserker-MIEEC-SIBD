<!DOCTYPE html>
<?php
  include ('templates/header_user.php');
 ?>
<html>
<head>
    <title> GYM NAME </title>
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/style2.css">
</head>
<body>
    
		<div class="login">
			<h1>Actualization</h1>
			<form action="action_actu.php" method="post">

                <label for="First_name">
					<i class="fas fa-lock"></i>
				</label>
				<input type="text" name="First_name" placeholder="First_name" id="First_name">
				<label for="Last_name">
					<i class="fas fa-lock"></i>
				</label>
				<input type="text" name="Last_name" placeholder="Last_name" id="Last_name">
                <label for="Adress">
					<i class="fas fa-lock"></i>
				</label>
				<input type="text" name="Adress" placeholder="Adress" id="Adress">
                <label for="Phone_number">
					<i class="fas fa-lock"></i>
				</label>
				<input type="text" name="Phone_number" placeholder="Phone_number" id="Phone_number">
                <label for="Age">
					<i class="fas fa-lock"></i>
				</label>
				<input type="text" name="Email" placeholder="Email" id="Email">
                <label for="Email">
					<i class="fas fa-lock"></i>
				</label>
				<input type="text" name="Age" placeholder="Age" id="Age">
                <label for="Age">
					<i class="fas fa-lock"></i>
				</label>
                <input type="text" name="Health_insurance_number" placeholder="Health_insurance_number" id="Health_insurance_number">
                <label for="Health_insurance_number">
					<i class="fas fa-lock"></i>
				</label>
                <input type="Text" name="Intolerance" placeholder="Intolerance" id="Intolerance">
                <label for="Intolerance">
					<i class="fas fa-lock"></i>
				</label>
                <input type="Text" name="Allergies" placeholder="Allergies" id="Allergies">
                <label for="Allergies">
					<i class="fas fa-lock"></i>
				</label>
                <input type="submit" value="Actualize">
			</form>
		</div>
	
</body>
</html>